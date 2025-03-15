<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Dashboard')</title>

    @yield('links') 
</head>
<body>
    <div id="app-layout">
    @include('student.layouts.navbar')  
    @include('student.layouts.sidebar') 
    </div>
    <main>
        @yield('content') 
    </main>

    @yield('scripts') 

</body>
</html>
