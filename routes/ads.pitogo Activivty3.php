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
     $student->first_name = 'Ronalyn';
     $student->last_name = 'Pitogo';
     $student->age = '20';
     $student->email = 'pitogoronalyn4@gmail.com';
     $student->save();
     return 'Student Created';
});

Route::get('/students', function () {
    $student = Student::a11();
    return $student;
});

Route::get('/students/update', function (){
    $student = Student::where('email', 'pitogoronalyn4@gmail.com')->first();
    $student->email = 'pitogoronalyn4@gmail.com';
    $student->save();
    return 'Student Updated';
});

Route::get('/student/delete', function (){
    $student = $Student::where('email', 'pitogoronalyn4@gmail.com')->first();
    $student->delete();
    return 'Student Deleted!';
});
