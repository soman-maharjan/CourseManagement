<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;  
use App\Models\Staff;
use App\Models\User;

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
        DB::table('staff')->insert([
            'first_name' => 'Staff',
            'last_name' => 'Test',
            'gender' => 'M',
            'date_of_birth' => Carbon::now()->format('Y-m-d H:i:s'),
            'email' => 'staff@staff.com',
            'number' => '9876543210',
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

        DB::table('courses')->insert([
            'title' => 'Bsc. Computing (Software Engineering)',
            'semester' => 6,
            'Description' => 'Computing (Software) Course Description',
            'credit_score' => 120,
            'start_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'cost' => 1200000,
            'course_leader' => Staff::all()->random()->id,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('courses')->insert([
            'title' => 'Environment Science',
            'semester' => 7,
            'Description' => 'Environment Science Course Description',
            'credit_score' => 120,
            'start_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'cost' => 1100000,
            'course_leader' => Staff::all()->random()->id,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('courses')->insert([
            'title' => 'Bsc. Computing (Networking)',
            'semester' => 6,
            'Description' => 'Computing (Networking) Course Description',
            'credit_score' => 120,
            'start_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'cost' => 1200000,
            'course_leader' => Staff::all()->random()->id,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('students')->insert([
            'first_name' => 'Soman',
            'last_name' => 'Maharjan',
            'gender' => 'M',
            'date_of_birth' => Carbon::now()->format('Y-m-d H:i:s'),
            'date_joined' => Carbon::now()->format('Y-m-d H:i:s'),
            'email' => 'maharjansoman@yahoo.com',
            'mobile_number' => '9841551187',
            'address' => 'Manbhawan, Lalitpur',
            'course_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('roles')->insert([
            'title' => 'Staff',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('roles')->insert([
            'title' => 'Student',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Soman',
            'email' => 'maharjansoman@yahoo.com',
            'password' => Hash::make('9841551187'),
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
        DB::table('users')->insert([
            'name' => 'Kumar',
            'email' => 'kumarlamichhane@gmail.com',
            'password' => Hash::make('9281231242'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Nischal',
            'email' => 'nischalkhadka@gmail.com',
            'password' => Hash::make('9281233442'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        User::where('email','maharjansoman@yahoo.com')->update(['role_id' => 2]);
        User::where('email','staff@staff.com')->update(['role_id' => 1]);
        User::where('email','kumarlamichhane@gmail.com')->update(['role_id' => 1]);
        User::where('email','nischalkhadka@gmail.com')->update(['role_id' => 1]);

    }
}
