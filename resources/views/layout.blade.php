<!DOCTYPE html>
<html>

<head>
    @include('templates.head')
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">

            @include('public.partials.header')

            <div class="content-wrapper container">

                @yield('content')

            </div>

            @include('public.partials.footer')
        </div>
    </div>
    @include('templates.js')
</body>

</html>