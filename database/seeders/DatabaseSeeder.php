<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;  

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Staff',
            'email' => 'staff@staff.com',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('staff')->insert([
            'first_name' => 'Ankit',
            'last_name' => 'Thapa',
            'gender' => 'M',
            'date_of_birth' => Carbon::now()->format('Y-m-d H:i:s'),
            'email' => 'ankitthapa@gmail.com',
            'number' => '9812878121',
            'address' => 'Kathmandu',
            'job_title' => 'Teacher',
            'salary' => 75000,
            'date_joined' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('staff')->insert([
            'first_name' => 'Kumar',
            'last_name' => 'Lamichhane',
            'gender' => 'M',
            'date_of_birth' => Carbon::now()->format('Y-m-d H:i:s'),
            'email' => 'kumarlamichhane@gmail.com',
            'number' => '9281231242',
            'address' => 'Lalitpur',
            'job_title' => 'Lecturer',
            'salary' => 80000,
            'date_joined' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('staff')->insert([
            'first_name' => 'Nischal',
            'last_name' => 'Khadka',
            'gender' => 'M',
            'date_of_birth' => Carbon::now()->format('Y-m-d H:i:s'),
            'email' => 'nischalkhadka@gmail.com',
            'number' => '9281233442',
            'address' => 'Kathmandu',
            'job_title' => 'Lecturer',
            'salary' => 90000,
            'date_joined' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
