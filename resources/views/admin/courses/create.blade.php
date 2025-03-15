@extends('admin.layouts.app')

@section('title', 'Add_Course')

@section('links')
    <!-- App Favicon -->
    <link rel="shortcut icon" href="{{ asset('assetss/images/favicon.ico') }}">

    <!-- App CSS -->
    <link href="{{ asset('assetss/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="{{ asset('assetss/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Admin Dashboard</h4>
                </div>
            </div>
</div>



 <!-- Form Validation -->
 <div class="row justify-content-center">
    <div class="col-md-8"> <!-- Makes the form well-balanced in width -->
        <div class="card shadow-sm">
            <div class="card-header text-center  text-black">
                <h5 class="mb-0">Add Course</h5>
            </div>

            <div class="card-body">
                <form class="row g-3 needs-validation" novalidate action=""{{ route('course.store') }}"" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="col-md-6">
                        <label for="courseName" class="form-label">Course Name</label>
                        <input type="text" class="form-control" name="name" id="courseName" placeholder="Enter Course Name" required>
                        <div class="invalid-feedback">Please enter a course name.</div>
                    </div>

                    <div class="col-md-6">
                        <label for="coursePrice" class="form-label">Course Price</label>
                        <input type="number" class="form-control" name="price" id="coursePrice" placeholder="Enter Course Price" required>
                        <div class="invalid-feedback">Please enter a valid price.</div>
                    </div>

                    <div class="col-md-6">
                        <label for="classesPerWeek" class="form-label">Classes per Week</label>
                        <select class="form-select" name="schedule" id="classesPerWeek" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="1">1 time a week</option>
                <option value="2">2 times a week</option>
                <option value="3">3 times a week</option>
                <option value="4">4 times a week</option>
                <option value="5">5 times a week</option>
                <option value="6">6 times a week</option>
                <option value="7">7 times a week</option>
                        </select>
                        <div class="invalid-feedback">Please select the number of classes.</div>
                    </div>

                    <div class="col-md-6">
                        <label for="courseImage" class="form-label">Upload Course Image</label>
                        <input type="file" class="form-control" id="courseImage"  name="image" accept="image/*" required>
                        <div class="invalid-feedback">Please upload a course image.</div>
                    </div>


                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                            <div class="invalid-feedback">You must agree before submitting.</div>
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Submit Form</button>
                    </div>

                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>




@endsection























@section('scripts')
    <!-- Vendor Scripts -->
    <script src="{{ asset('assetss/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assetss/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetss/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assetss/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assetss/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assetss/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assetss/libs/feather-icons/feather.min.js') }}"></script>

    <!-- ApexCharts JS -->
    <script src="{{ asset('assetss/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- External Script (Unchanged) -->
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>

    <!-- Widgets Init JS -->
    <script src="{{ asset('assetss/js/pages/crm-dashboard.init.js') }}"></script>

    <!-- App JS -->
    <script src="{{ asset('assetss/js/app.js') }}"></script>
@endsection
