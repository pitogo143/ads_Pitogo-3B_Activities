<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Models\Student;
use App\Models\course;



Route::get('/students/create', function () {
     $student = new student();
     $student->first_name = 'John';
     $student->last_name = 'Doe';
     $student->email = 'johndoe@example.com';
     $student->save();
     return 'Student Created';
});

Route::get('/students', function () {
    $student = Student::a11();
    return $student;
});

Route::get('/students/update', function (){
    $student = Student::where('email', 'johndoe@gmail.com')->first();
    $student->email = 'john.doe@gmail.com';
    $student->save();
    return 'Student Updated';
});

Route::get('/student/delete', function (){
    $student = $Student::where('email', 'jhondoe@gmail.com')->first();
    $student->delete();
    return 'Student Deleted!';
});
