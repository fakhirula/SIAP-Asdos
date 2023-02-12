<!DOCTYPE html>
<html>

<head>
    @include('templates.head')
</head>
<body>
    <div id="app">
        <div id="main">
            <!-- Sidebar -->
            @include('admin.partials.sidebar')

            <!-- Page Content-->
            @yield('content')


            <!-- JavaScript -->
            @include('templates.js')
        </div>
    </div>
</body>

</html>