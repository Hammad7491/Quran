@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>All Students</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
