<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;

Route::get('/students', function () {
    $students = Student::all();
    return view('students.index', compact('students'));
});
