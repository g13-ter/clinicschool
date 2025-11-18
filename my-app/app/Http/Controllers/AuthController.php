<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Student;
use App\Models\Medicine;
use App\Models\ClinicVisit;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showDashboard()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $user = Auth::user();
        
        // Redirect based on role
        if ($user->isAdmin()) {
            return redirect()->route('admin.dashboard');
        } else {
            // Get dynamic statistics with error handling
            try {
                $totalStudents = Student::count();
            } catch (\Exception $e) {
                $totalStudents = 0;
            }
            
            try {
                $totalMedicines = Medicine::count();
            } catch (\Exception $e) {
                $totalMedicines = 0;
            }
            
            try {
                $totalClinicVisits = ClinicVisit::count();
            } catch (\Exception $e) {
                $totalClinicVisits = 0;
            }
            
            // Count emergency cases - check if complaint or diagnosis contains emergency-related keywords
            try {
                $emergencyCases = ClinicVisit::where(function($query) {
                    $query->where('complaint', 'like', '%emergency%')
                          ->orWhere('complaint', 'like', '%urgent%')
                          ->orWhere('complaint', 'like', '%critical%')
                          ->orWhere('diagnosis', 'like', '%emergency%')
                          ->orWhere('diagnosis', 'like', '%urgent%')
                          ->orWhere('diagnosis', 'like', '%critical%');
                })->count();
            } catch (\Exception $e) {
                $emergencyCases = 0;
            }
            
            // Count referrals - check if treatment or notes contains referral-related keywords
            try {
                $referrals = ClinicVisit::where(function($query) {
                    $query->where('treatment', 'like', '%refer%')
                          ->orWhere('notes', 'like', '%refer%')
                          ->orWhere('diagnosis', 'like', '%refer%');
                })->count();
            } catch (\Exception $e) {
                $referrals = 0;
            }
            
            return view('dashboard.user-dashboard', compact(
                'totalStudents',
                'totalMedicines',
                'totalClinicVisits',
                'emergencyCases',
                'referrals'
            ));
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->regenerate();
            // Redirect based on role automatically
            if ($user->isAdmin()) {
                return redirect()->intended(route('admin.dashboard'));
            } else {
                return redirect()->intended(route('dashboard'));
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
