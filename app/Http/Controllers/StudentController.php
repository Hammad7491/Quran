<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{


    public function index()
    {
        // Fetch all users where role is 'student'
        $students = User::where('role', 'student')->get();
        
        // Pass the students data to the view
        return view('admin.student.index', compact('students'));
    }


    public function create()
    {
      
        $teachers = User::where('role', 'teacher')->get();
        $courses = Course::all(); // Fetch all courses

        return view('admin.student.create', compact( 'teachers', 'courses'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email',
            'password'   => 'required|min:6',
            'teacher_id' => 'required|exists:users,id',
            'course_id'  => 'required|exists:courses,id',
        ]);

        // Create a new user with the 'student' role
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => 'student',
        ]);


        Student::create([
            'user_id'    => $user->id,
            'teacher_id' => $request->teacher_id,
            'course_id'  => $request->course_id,
        ]);

        return redirect()->back()->with('success', 'Student registered successfully!');
    }
}
