<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function create()
    {
        return view('admin.courses.create'); // Show course creation form
    }

    public function store(Request $request)
    {
        // Debugging: Check if form data and file exist
        // dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'schedule' => 'required|integer|min:1|max:7',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Store the file in 'storage/app/public/course_images'
            $imagePath = $request->file('image')->store('course_images', 'public');
        } else {
            return redirect()->back()->with('error', 'Image upload failed');
        }

        Course::create([
            'name' => $request->name,
            'price' => $request->price,
            'schedule' => $request->schedule,
            'image' => $imagePath, // Store path in database
        ]);

        return redirect()->back()->with('success', 'Course added successfully!');
    }

    public function index()
    {
        $courses = Course::all(); // Fetch all courses
        return view('admin.courses.index', compact('courses'));
    }
    
}
