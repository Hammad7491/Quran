@extends('admin.layouts.app')

@section('title', 'Teacher List')

@section('content')
    <div class="container">
        <h1>List of Teachers</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
