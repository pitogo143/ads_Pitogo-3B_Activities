<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
         $table->timetmaps();
      });
    }

    Route::get('/course/create', function () {
        $course = new Course();
        $course->course_name = 'Intraduction to Database';
        $course->save();
        return 'Course Created!';
    }); 


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
        
};
