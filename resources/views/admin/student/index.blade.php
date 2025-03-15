@extends('admin.layouts.app')

@section('title', 'Teachers List')

@section('links')
<link rel="shortcut icon" href="{{ asset('assetss/images/favicon.ico') }}">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<!-- Datatables CSS -->
<link href="{{ asset('assetss/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assetss/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assetss/libs/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assetss/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assetss/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}" rel="stylesheet" type="text/css">

<!-- App CSS -->
<link href="{{ asset('assetss/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style">

<!-- Icons -->
<link href="{{ asset('assetss/css/icons.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Admin Dashboard</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h5 class="card-title mb-0">List of Students</h5>
                        </div><!-- end card header -->
            
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Assigned Teacher</th>
                                        <th>Assigned Course</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Sample Data (Replace with dynamic data from the backend) -->
                                    @foreach($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->created_at }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                    
                                   
                                </tbody>
                            </table>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assetss/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assetss/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetss/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assetss/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assetss/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assetss/js/app.js') }}"></script>
@endsection










