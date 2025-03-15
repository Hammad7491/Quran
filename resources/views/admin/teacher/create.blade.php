@extends('admin.layouts.app')

@section('content')
    <style>    </style>


    <div class="container">
        <h2>Add New Teacher</h2>

        <form action="{{ route('teacher.store') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        
            <label for="status">Status:</label>
            <select id="status" name="status">
                <option value="1">Active</option>
                <option value="0">Deactivated</option>
            </select>
        
            <button type="submit" class="btn">Save User</button>
        </form>
        
    </div>


@endsection