<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\Staff;
use App\Models\User;
use Hamcrest\Description;

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
        DB::table('staff')->insert([
            'first_name' => 'Rabin',
            'last_name' => 'Thapa',
            'gender' => 'M',
            'date_of_birth' => Carbon::now()->format('Y-m-d H:i:s'),
            'email' => 'rabinthapa@gmail.com',
            'number' => '9281221442',
            'address' => 'Bhaktapur',
            'job_title' => 'Lecturer',
            'salary' => 10000,
            'date_joined' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('staff')->insert([
            'first_name' => 'Ankit',
            'last_name' => 'Thapa',
            'gender' => 'M',
            'date_of_birth' => Carbon::now()->format('Y-m-d H:i:s'),
            'email' => 'ankitthapa@gmail.com',
            'number' => '9287221442',
            'address' => 'Kathmandu',
            'job_title' => 'Lecturer',
            'salary' => 60000,
            'date_joined' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('staff')->insert([
            'first_name' => 'Mamta',
            'last_name' => 'Bhattarai',
            'gender' => 'F',
            'date_of_birth' => Carbon::now()->format('Y-m-d H:i:s'),
            'email' => 'mamta@gmail.com',
            'number' => '9111221442',
            'address' => 'Lalitpur',
            'job_title' => 'Lecturer',
            'salary' => 65000,
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
            'pat_id' => 2,
            'student_id' => '20416264',
            'date_of_birth' => Carbon::now()->format('Y-m-d H:i:s'),
            'date_joined' => Carbon::now()->format('Y-m-d H:i:s'),
            'email' => 'maharjansoman@yahoo.com',
            'mobile_number' => '9841551187',
            'address' => 'Manbhawan, Lalitpur',
            'course_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('students')->insert([
            'first_name' => 'Safal',
            'last_name' => 'Sharma',
            'gender' => 'M',
            'student_id' => '20416265',
            'date_of_birth' => Carbon::now()->format('Y-m-d H:i:s'),
            'date_joined' => Carbon::now()->format('Y-m-d H:i:s'),
            'email' => 'safalsharma@gmail.com',
            'mobile_number' => '9812768541',
            'address' => 'Bhaktapur',
            'course_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('students')->insert([
            'first_name' => 'Pratik',
            'last_name' => 'Prajapati',
            'student_id' => '20416267',
            'pat_id' => 2,
            'gender' => 'M',
            'date_of_birth' => Carbon::now()->format('Y-m-d H:i:s'),
            'date_joined' => Carbon::now()->format('Y-m-d H:i:s'),
            'email' => 'pratikprajapati@gmail.com',
            'mobile_number' => '9812768123',
            'address' => 'Bhaktapur',
            'course_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('students')->insert([
            'first_name' => 'Sujayan',
            'middle_name' => 'Raj',
            'last_name' => 'Manandhar',
            'student_id' => '20416284',
            'pat_id' => 1,
            'gender' => 'M',
            'date_of_birth' => Carbon::now()->format('Y-m-d H:i:s'),
            'date_joined' => Carbon::now()->format('Y-m-d H:i:s'),
            'email' => 'sujayan@gmail.com',
            'mobile_number' => '9812648971',
            'address' => 'Lalitpur',
            'course_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('students')->insert([
            'first_name' => 'Rabika',
            'last_name' => 'Pradhananga',
            'student_id' => '20416269',
            'pat_id' => 2,
            'gender' => 'F',
            'date_of_birth' => Carbon::now()->format('Y-m-d H:i:s'),
            'date_joined' => Carbon::now()->format('Y-m-d H:i:s'),
            'email' => 'rabika@gmail.com',
            'mobile_number' => '9423420324',
            'address' => 'Bhaktapur',
            'course_id' => 2,
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
            'name' => 'Rabika',
            'email' => 'rabika@gmail.com',
            'password' => Hash::make('0000'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Sujayan',
            'email' => 'sujayan@gmail.com',
            'password' => Hash::make('0000'),
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
        DB::table('users')->insert([
            'name' => 'Rabin',
            'email' => 'rabinthapa@gmail.com',
            'password' => Hash::make('9281221442'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Ankit',
            'email' => 'ankitthapa@gmail.com',
            'password' => Hash::make('9287221442'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Mamta',
            'email' => 'mamta@gmail.com',
            'password' => Hash::make('9111221442'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        User::where('email', 'maharjansoman@yahoo.com')->update(['role_id' => 2]);
        User::where('email', 'staff@staff.com')->update(['role_id' => 1]);
        User::where('email', 'kumarlamichhane@gmail.com')->update(['role_id' => 1]);
        User::where('email', 'nischalkhadka@gmail.com')->update(['role_id' => 1]);
        User::where('email', 'rabinthapa@gmail.com')->update(['role_id' => 1]);
        User::where('email', 'ankitthapa@gmail.com')->update(['role_id' => 1]);
        User::where('email', 'mamta@gmail.com')->update(['role_id' => 1]);
        User::where('email', 'rabika@gmail.com')->update(['role_id' => 2]);
        User::where('email', 'sujayan@gmail.com')->update(['role_id' => 2]);

        DB::table('modules')->insert([
            'title' => 'Database',
            'module_code' => 'CSY2001',
            'description' => 'Database module description!',
            'start_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'credit_score' => 20,
            'module_leader' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('modules')->insert([
            'title' => 'Computer Communication',
            'module_code' => 'CSY2003',
            'description' => 'Computer Communication module description!',
            'start_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'credit_score' => 20,
            'module_leader' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('modules')->insert([
            'title' => 'Web Programming',
            'module_code' => 'CSY2010',
            'description' => 'Web Programming module description!',
            'start_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'credit_score' => 20,
            'module_leader' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('modules')->insert([
            'title' => 'Computer System',
            'module_code' => 'CSY2019',
            'description' => 'Computer System module description!',
            'start_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'credit_score' => 20,
            'module_leader' => 6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('modules')->insert([
            'title' => 'Problem Solving And Programming',
            'module_code' => 'CSY2020',
            'description' => 'Problem Solving And Programming module description!',
            'start_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'credit_score' => 20,
            'module_leader' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('modules')->insert([
            'title' => 'Operating System',
            'module_code' => 'CSY2021',
            'description' => 'Operating System module description!',
            'start_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'credit_score' => 20,
            'module_leader' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('modules')->insert([
            'title' => 'Computer Networks',
            'module_code' => 'CSY2024',
            'description' => 'Computer Networks module description!',
            'start_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'credit_score' => 20,
            'module_leader' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('modules')->insert([
            'title' => 'Science',
            'module_code' => 'CSY2011',
            'description' => 'Science module description!',
            'start_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'credit_score' => 20,
            'module_leader' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('course_modules')->insert([
            'course_id' => '2',
            'module_id' => '8',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('course_modules')->insert([
            'course_id' => '1',
            'module_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('course_modules')->insert([
            'course_id' => '1',
            'module_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('course_modules')->insert([
            'course_id' => '1',
            'module_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('course_modules')->insert([
            'course_id' => '1',
            'module_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('course_modules')->insert([
            'course_id' => '1',
            'module_id' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('course_modules')->insert([
            'course_id' => '3',
            'module_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('course_modules')->insert([
            'course_id' => '3',
            'module_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('course_modules')->insert([
            'course_id' => '3',
            'module_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('course_modules')->insert([
            'course_id' => '3',
            'module_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('course_modules')->insert([
            'course_id' => '3',
            'module_id' => '6',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('course_modules')->insert([
            'course_id' => '3',
            'module_id' => '7',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('attendances')->insert([
            'module_id' => '2',
            'student_id' => '1',
            'status' => '1',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('attendances')->insert([
            'module_id' => '2',
            'student_id' => '2',
            'status' => '0',
            'attendance_date' => Carbon::now()->format('2020-9-10'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('assignments')->insert([
            'title' => 'Database Assignment 1',
            'description' => 'Database Assignment Description',
            'assignment_file' => 'assignment1.doc',
            'submission_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'module_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('assignments')->insert([
            'title' => 'Database Assignment 2',
            'description' => 'Database 2 Assignment Description',
            'assignment_file' => 'assignment2.doc',
            'submission_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'module_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('assignments')->insert([
            'title' => 'Computer Communication Assignment 1',
            'description' => 'Computer Communication Assignment Description',
            'assignment_file' => 'assignment1.doc',
            'submission_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'module_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('assignments')->insert([
            'title' => 'Computer Communication Assignment 2',
            'description' => 'Computer Communication 2 Assignment Description',
            'assignment_file' => 'assignment4.doc',
            'submission_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'module_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('assignments')->insert([
            'title' => 'Web Programming Assignment 1',
            'description' => 'Web Programming Assignment Description',
            'assignment_file' => 'assignment3.doc',
            'submission_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'module_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('assignments')->insert([
            'title' => 'Web Programming Assignment 2',
            'description' => 'Web Programming Assignment Description',
            'assignment_file' => 'assignment2.doc',
            'submission_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'module_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('assignments')->insert([
            'title' => 'Computer System Assignment 1',
            'description' => 'Computer System Assignment Description',
            'assignment_file' => 'assignment4.doc',
            'submission_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'module_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('assignments')->insert([
            'title' => 'Problem Solving and Programming Assignment 1',
            'description' => 'Problem Solving and Programming Description',
            'assignment_file' => 'assignment4.doc',
            'submission_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'module_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('assignments')->insert([
            'title' => 'Operating System Term 1',
            'description' => 'OS Description',
            'assignment_file' => 'assignment2.doc',
            'submission_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'module_id' => 6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('assignments')->insert([
            'title' => 'Computer Networks Term 3',
            'description' => 'Computer Networks Description',
            'assignment_file' => 'assignment1.doc',
            'submission_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'module_id' => 7,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('reports')->insert([
            'student_id' => 1,
            'student_assignment' => 'student1.doc',
            'module_id' => 1,
            'title' => 'Assignment Submission',
            'description' => 'Assignment Submission for Database.',
            'assignment_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('reports')->insert([
            'student_id' => 2,
            'student_assignment' => 'student2.doc',
            'module_id' => 1,
            'title' => 'Term 1 Assignment',
            'description' => 'Assignment Submission for Database.',
            'assignment_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('reports')->insert([
            'student_id' => 3,
            'student_assignment' => 'student4.doc',
            'module_id' => 1,
            'title' => 'Term 2 Assignment Submission',
            'description' => 'Assignment Submission for Database.',
            'assignment_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('reports')->insert([
            'student_id' => 1,
            'student_assignment' => 'student2.doc',
            'module_id' => 2,
            'title' => 'Term 3 Assignment',
            'description' => 'Assignment Submission for Computer Communication.',
            'assignment_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('reports')->insert([
            'student_id' => 2,
            'student_assignment' => 'student3.doc',
            'module_id' => 2,
            'title' => 'Term 1 Assignment',
            'description' => 'Assignment Submission for Computer Communication.',
            'assignment_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('reports')->insert([
            'student_id' => 3,
            'student_assignment' => 'student1.doc',
            'module_id' => 3,
            'title' => 'Term 1 Assignment',
            'description' => 'Assignment Submission for Web Programming.',
            'assignment_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('assignment_grade')->insert([
            'report_id' => 1,
            'module_id' => 1,
            'grade' => 'A+',
            'feedback' => 'Very Good!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('assignment_grade')->insert([
            'report_id' => 4,
            'module_id' => 2,
            'grade' => 'A',
            'feedback' => 'Good!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('timetables')->insert([
            'start_time' => '06:00:00',
            'end_time' => '08:00:00',
            'day' => 'Sunday',
            'module_id' => '1',
        ]);
        DB::table('timetables')->insert([
            'start_time' => '09:00:00',
            'end_time' => '10:00:00',
            'day' => 'Sunday',
            'module_id' => '2',
        ]);
        DB::table('timetables')->insert([
            'start_time' => '12:00:00',
            'end_time' => '14:00:00',
            'day' => 'Sunday',
            'module_id' => '3',
        ]);
        DB::table('timetables')->insert([
            'start_time' => '06:00:00',
            'end_time' => '08:00:00',
            'day' => 'Monday',
            'module_id' => '2',
        ]);
        DB::table('timetables')->insert([
            'start_time' => '09:00:00',
            'end_time' => '10:00:00',
            'day' => 'Monday',
            'module_id' => '3',
        ]);
        DB::table('timetables')->insert([
            'start_time' => '10:00:00',
            'end_time' => '11:30:00',
            'day' => 'Tuesday',
            'module_id' => '5',
        ]);
        DB::table('notes')->insert([
            'user_id' => '2',
            'title' => 'Laravel',
            'note' => 'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern',
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '1',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1
        ]);
        DB::table('attendances')->insert([
            'student_id' => '2',
            'module_id' => '1',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1
        ]);
        DB::table('attendances')->insert([
            'student_id' => '4',
            'module_id' => '1',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1
        ]);
        DB::table('attendances')->insert([
            'student_id' => '3',
            'module_id' => '4',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '1',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 0
        ]);
        DB::table('attendances')->insert([
            'student_id' => '5',
            'module_id' => '1',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 0
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '1',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 0
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '1',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 0
        ]);
        DB::table('attendances')->insert([
            'student_id' => '3',
            'module_id' => '1',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 0
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '1',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '1',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '2',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 0
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '2',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 0
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '2',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 0
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '2',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '5',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '5',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '5',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '5',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '5',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '3',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '3',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '3',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '3',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1
        ]);
        DB::table('attendances')->insert([
            'student_id' => '1',
            'module_id' => '3',
            'attendance_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1
        ]);
    }
}
