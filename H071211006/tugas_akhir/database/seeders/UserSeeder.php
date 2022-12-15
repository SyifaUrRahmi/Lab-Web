<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password')
        ])->assignRole('admin');

        User::create([
            'name' => 'Prince Hussein',
            'email' => 'member@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password')
        ])->assignRole('penulis');
      
        User::create([
            'name' => 'hikma',
            'email' => 'hikmahnurrrrr@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password')
        ])->assignRole('pembaca');
    }
}
