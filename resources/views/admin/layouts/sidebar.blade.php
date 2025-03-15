<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="logo-box">
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assetss/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assetss/images/logo-light.png') }}" alt="logo" height="24">
                    </span>
                </a>
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assetss/images/logo-sm.png') }}" alt="logo" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assetss/images/logo-dark.png') }}" alt="logo" height="24">
                    </span>
                </a>
            </div>

            <ul id="side-menu">


                <li class="menu-title">Dashboard</li>

                <li>
                    <a href="#sidebarCourses" data-bs-toggle="collapse">
                        <i class="fas fa-book-open text-info"></i>
                        <span> Courses </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCourses">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('course.create') }}" class="tp-link">Add Course</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.courses.index') }}" class="tp-link">List Course</a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                <li>
                    <a href="#sidebarTeachers" data-bs-toggle="collapse">
                        <i class="fas fa-user-graduate text-success"></i>
                        <span> Teachers </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTeachers">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('teacher.create') }}" class="tp-link">Add Teacher</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.teacher.index') }}" class="tp-link">List Teacher</a>
                            </li>
                        </ul>
                    </div>
                </li>





                <li>
                    <a href="#sidebarStudents" data-bs-toggle="collapse">
                        <i class="fas fa-chalkboard-teacher text-primary"></i> 
                        <span> Students </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarStudents">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('student.create') }}" class="tp-link">Add Student</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.student.index') }}" class="tp-link">List Student</a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                






























































                <li class="menu-title mt-2">Apps</li>
    
                <li>
                    <a href="apps-todolist.html" class="tp-link">
                        <i data-feather="columns"></i>
                        <span> Todo List </span>
                    </a>
                </li>
               
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
</div>