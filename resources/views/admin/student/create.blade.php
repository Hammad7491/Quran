@extends('admin.layouts.app')

@section('content')


    <style>   </style>



    <div class="container">
        <h2>Add  Student</h2>

        <form action="{{ route("student.store") }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        
      

            <label for="teacher">Select Teacher:</label>
            <select id="teacher" name="teacher_id" required>
                <option value="">-- Select Teacher --</option>
                @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
            </select>

           
            <label for="course">Select Course:</label>
            <select id="course" name="course_id" required>
                <option value="">-- Select Course --</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select>
        
            <button type="submit" class="btn">Save User</button>
        </form>
        
    </div>


@endsection