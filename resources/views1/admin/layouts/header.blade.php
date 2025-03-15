<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Home Dropdown (Student) -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Student 
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                        <li><a class="dropdown-item" href="{{ route('student.create') }}">Add Student</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.student.index') }}">List Student</a></li>
                       
                    </ul>
                </li>

                <!-- Link Dropdown (Teacher) -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="linkDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Teacher
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="linkDropdown">
                        <li><a class="dropdown-item" href="{{ route('teacher.create') }}">Add Teacher</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.teacher.index') }}">List Teacher</a></li>
                        
                    </ul>
                </li>
            </ul>

            <!-- Logout Button (Only when user is logged in) -->
            @auth
                <form action="{{ route('logout') }}" method="POST" class="d-flex">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            @endauth
        </div>
    </div>
</nav>
