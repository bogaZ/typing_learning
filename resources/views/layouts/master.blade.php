<!doctype HTML5>
<html>
<head>
    @include('layouts.top')
</head>

<body>
    <div id="app">
        @include('layouts.navigation')
        <main class="" id="main">
            @yield('content')
        </main>
    </div>

    @include('layouts.bottom')
    {{-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> --}}
    {{-- <script type="Text/JavaScript">
        $('.canvasjs-chart-credit').remove();
    </script> --}}
</body>
</html>
