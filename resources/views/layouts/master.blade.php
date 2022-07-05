<!doctype HTML5>
<html>
<head>
    @include('layouts.top')
</head>

<body>
    @role('admin')
    @if(Route::has('home'))
        <div>
    @else
        <div id="app">
    @endif
    @endrole

    @role('user')
        <div id="app">
    @endrole
        @include('layouts.navigation')
        <main class="" id="main">
            @yield('content')
        </main>
    </div>
    @include('layouts.bottom')
</body>
</html>
