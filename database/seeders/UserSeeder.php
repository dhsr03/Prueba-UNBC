<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user = User::create([
        'name' => 'Daniel',
        'last_name' => 'Soto',
        'email' => 'dhsr03@gmail.com',
        'phone' => '3204236748',
        'is_active' => 1,
        'password' => bcrypt('Daniel0*'),
       ]);
       $user->assignRole('Administrador');
    }
}
