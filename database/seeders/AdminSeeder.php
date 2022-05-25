<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->role = 'admin1';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User();
        $user->name = 'admin2';
        $user->email = 'admin2@admin2.com';
        $user->role = 'admin2';
        $user->password = Hash::make('password');
        $user->save();
    }
}
