<!doctype HTML5>
<html>
<head>
    @include('layouts.top')
</head>

<body>
    @if(Route::has('home'))
    <div>
    @else
    <div id="app">
    @endif
        @include('layouts.navigation')
        <main class="" id="main">
            @yield('content')
        </main>
    </div>
    @include('layouts.bottom')
</body>
</html>
