<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::where('email', 'admin@xeroplus.com')->create([

            'name' => 'Admin',
            'email' => 'admin@xeroplus.com',
            'password' => bcrypt('@xeroplus321'),

        ]);
    }
}
