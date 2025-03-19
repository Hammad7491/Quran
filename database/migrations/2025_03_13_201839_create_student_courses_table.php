<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('teacher_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->time('start_time')->nullable(); // Naya start_time column
            $table->time('end_time')->nullable(); // Naya end_time column            $table->timestamps();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('student_courses');
    }
};
