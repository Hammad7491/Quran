<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Bootstrap Icons CDN -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
 
 
     <!-- Font Awesome Icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>@yield('title', 'Admin Dashboard')</title>
    

    @yield('links') 
</head>
<body>


    
    <div id="app-layout">
    @include('admin.layouts.navbar')  
    
    @include('admin.layouts.sidebar') 
    
    </div>
    
    <main>
        
        <div class="content-page">
            <div class="content">
                @include('admin.layouts.alert')
        
        @yield('content') 
                </div></div>
   
    </main>

    @yield('scripts') 

</body>
</html>
