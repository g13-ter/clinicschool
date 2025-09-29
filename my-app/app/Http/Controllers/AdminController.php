<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    /**
     * Show admin dashboard
     */
    public function dashboard()
    {
        $users = User::where('role', 'user')
                    ->where('created_by', Auth::id())
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
        
        $totalUsers = User::where('role', 'user')
                         ->where('created_by', Auth::id())
                         ->count();
        
        $activeUsers = User::where('role', 'user')
                          ->where('created_by', Auth::id())
                          ->where('is_active', true)
                          ->count();

        return view('admin.admin-dashboard', compact('users', 'totalUsers', 'activeUsers'));
    }

    /**
     * Show create user form
     */
    public function createUser()
    {
        return view('admin.create-user');
    }

    /**
     * Store new user
     */
    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:admin,user',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'is_active' => true,
            'created_by' => Auth::id(),
        ]);

        return redirect()->route('admin.dashboard')
                        ->with('success', 'User created successfully!');
    }

    /**
     * Show edit user form
     */
    public function editUser(User $user)
    {
        // Ensure admin can only edit users they created
        if ($user->created_by !== Auth::id()) {
            return redirect()->route('admin.dashboard')
                           ->with('error', 'You can only edit users you created.');
        }

        return view('admin.edit-user', compact('user'));
    }

    /**
     * Update user
     */
    public function updateUser(Request $request, User $user)
    {
        // Ensure admin can only edit users they created
        if ($user->created_by !== Auth::id()) {
            return redirect()->route('admin.dashboard')
                           ->with('error', 'You can only edit users you created.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id)
            ],
            'role' => 'required|in:admin,user',
            'is_active' => 'boolean',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.dashboard')
                        ->with('success', 'User updated successfully!');
    }

    /**
     * Toggle user active status
     */
    public function toggleUserStatus(User $user)
    {
        // Ensure admin can only edit users they created
        if ($user->created_by !== Auth::id()) {
            return redirect()->route('admin.dashboard')
                           ->with('error', 'You can only edit users you created.');
        }

        $user->update([
            'is_active' => !$user->is_active
        ]);

        $status = $user->is_active ? 'activated' : 'deactivated';
        
        return redirect()->route('admin.dashboard')
                        ->with('success', "User {$status} successfully!");
    }

    /**
     * Delete user
     */
    public function deleteUser(User $user)
    {
        // Ensure admin can only delete users they created
        if ($user->created_by !== Auth::id()) {
            return redirect()->route('admin.dashboard')
                           ->with('error', 'You can only delete users you created.');
        }

        $user->delete();

        return redirect()->route('admin.dashboard')
                        ->with('success', 'User deleted successfully!');
    }
}
