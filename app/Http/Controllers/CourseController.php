<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    // Show Course List + Form for Create/Edit
    public function index(Request $request, $id = null)
    {
        $courses = Course::all();
        $course = $id ? Course::findOrFail($id) : null; // Fetch course if editing
    
        // Check if "action=create" is set, OR if editing an existing course
        if ($request->query('action') === 'create' || $id) {
            return view('admin.courses.create', compact('courses', 'course'));
        }
    
        // Default behavior: Show the course list page
        return view('admin.courses.index', compact('courses'));
    }
    

    // Store New Course
    public function store(Request $request)
    {
        $this->validateCourse($request);

        $imagePath = $request->hasFile('image') ? $request->file('image')->store('course_images', 'public') : null;

        Course::create([
            'name' => $request->name,
            'price' => $request->price,
            'schedule' => $request->schedule,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.courses.index')->with('success', 'Course added successfully!');
    }

    // Update Existing Course
    public function update(Request $request, $id)
    {
        $this->validateCourse($request);

        $course = Course::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($course->image) {
                Storage::disk('public')->delete($course->image);
            }
            $imagePath = $request->file('image')->store('course_images', 'public');
        } else {
            $imagePath = $course->image;
        }

        $course->update([
            'name' => $request->name,
            'price' => $request->price,
            'schedule' => $request->schedule,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully!');
    }

    // Delete Course
    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        if ($course->image) {
            Storage::disk('public')->delete($course->image);
        }

        $course->delete();

        return redirect()->back()->with('success', 'Course deleted successfully!');
    }

    // Validation Logic
    private function validateCourse($request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'schedule' => 'required|integer|min:1|max:7',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    }
}
