<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index(Request $request, $id = null)
    {
        $students = Student::with(['teacher', 'course', 'user'])->get();
        $student = $id ? Student::findOrFail($id) : null;
        $teachers = User::where('role', 'teacher')->get();
        $courses = Course::all();

        if ($request->query('action') === 'create' || $id) {
            return view('admin.student.create', compact('students', 'student', 'teachers', 'courses'));
        }

        return view('admin.student.index', compact('students'));
    }

    public function storeOrUpdate(Request $request, $id = null)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email' . ($id ? ",$id" : ''),
            'password'   => $id ? 'nullable|min:6' : 'required|min:6',
            'teacher_id' => 'required|exists:users,id',
            'course_id'  => 'required|exists:courses,id',
        ]);

        if ($id) {
            $student = Student::findOrFail($id);
            $user = $student->user;
            $user->update([
                'name'  => $request->name,
                'email' => $request->email,
                'password' => $request->password ? Hash::make($request->password) : $user->password,
            ]);

            $student->update([
                'teacher_id' => $request->teacher_id,
                'course_id'  => $request->course_id,
            ]);

            return redirect()->route('admin.student.index')->with('success', 'Student updated successfully!');
        } else {
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

            return redirect()->route('admin.student.index')->with('success', 'Student registered successfully!');
        }
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->user()->delete();
        $student->delete();

        return redirect()->back()->with('success', 'Student deleted successfully!');
    }
}
