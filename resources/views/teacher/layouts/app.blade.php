<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>@yield('title', 'Admin Dashboard')</title>

    

    @yield('links') 
</head>
<body>
    <div id="app-layout">
        @include('teacher.layouts.navbar')  
        @include('teacher.layouts.sidebar') 
    </div>
    
    <main>
        @yield('content') 
    </main>
   

    @yield('scripts') 

</body>
</html>
