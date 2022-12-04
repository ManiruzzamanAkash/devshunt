<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Superadmin user create
        User::create([
            'name' => 'Maniruzzaman Akash',
            'email' => 'manirujjamanakash@gmail.com',
            'password' => Hash::make('12345678'),
            'phone_no' => '01951233084',
            'address' => 'Dhaka',
            'city' => 'Dhaka',
            'state' => 'Bangladesh',
            'date_of_birth' => '30-11-2000',
            'gender' => 'male',
        ]);

        User::factory(100)->create();
    }
}
