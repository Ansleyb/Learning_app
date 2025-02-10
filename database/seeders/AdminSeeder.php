<?php

// Location: database/seeders/AdminSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $admin = new Admin();
        $admin->name = 'Superadmin';
        $admin->email = 'admin@example.com';
        $admin->username = 'superadmin';  // Add the username field if applicable
        $admin->password = Hash::make('password123');
        $admin->save();
    }
}
