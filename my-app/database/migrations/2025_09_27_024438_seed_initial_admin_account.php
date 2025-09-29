<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create initial admin account if it doesn't exist
        User::firstOrCreate(
            ['email' => 'admin@clinic.com'],
            [
                'name' => 'System Administrator',
                'password' => Hash::make('admin123'),
                'role' => User::ROLE_ADMIN,
                'is_active' => true,
                'created_by' => null, // First admin has no creator
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove the initial admin account
        User::where('email', 'admin@clinic.com')->delete();
    }
};
