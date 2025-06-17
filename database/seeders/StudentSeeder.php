<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
        'name' => 'Alice Johnson',
        'gender'=> 'Female',
        'age' => 20,
        'email' => 'alice@example.com',
        'course' => 'BS Computer Science'
    ]);

    Student::create([
        'name' => 'Bob Santos',
        'gender'=> 'Male',
        'age' => 22,
        'email' => 'bob@example.com',
        'course' => 'BS Information Technology'
    ]);
    }
}
