{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Ngetext
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a id="" class="nav-link" href="/home" role="button" aria-expanded="false" v-pre>faq</a>
                    </li>
                    <li class="nav-item">
                        <a id="" class="nav-link" href="/home" role="button" aria-expanded="false" v-pre>forum</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            profile
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item disabled text-decoration-none" disabled>Hai, {{ $username }}</a>
                            <a class="dropdown-item text-decoration-none" href="#">
                                {{ __('Pengaturan') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav> --}}
@role('pengguna')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5 py-2 mb-3">
        <a href="{{route('welcome')}}" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-keyboard me-2 text-white"></i>NgeTeks</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
            @auth
                <a href="{{route('home')}}" class="btn btn-primary py-2 px-4 ms-3">Home</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="btn btn-danger py-2 px-4 ms-3">Keluar</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @else
                @if(Route::has('login'))
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-3">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 ms-3">Register</a>
                    @endif
                @endif
            @endauth
        </div>
    </nav>
@endrole
@role('admin')
    {{-- <nav id="nav" class="navbar-expand-lg navbar-dark bg-dark px-5 py-2" style="height: 60px">
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{route('welcome')}}" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-keyboard me-2 text-white"></i>NgeTeks</h1>
                </a>
            </div>
            <div>
                <button id="main" class="btn openbtn btn-primary" onclick="openNav()" type="button">
                    <span class="fa fa-bars"></span>
                </button>
            </div>
        </div>
        <div id="main">
            <button class="openbtn btn-primary" onclick="openNav()">☰</button>
        </div>
        
        <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
            @auth
            @else
                @if(Route::has('login'))
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-3">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 ms-3">Register</a>
                    @endif
                @endif
            @endauth
        </div>
    </nav> --}}
    <nav id="mySidebar" class="sidebar bg-white shadow-lg d-flex justify-content-around flex-column">
        <div>

            {{-- <div class="btnclosed">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            </div> --}}
            {{-- <a href="#" class="position-relative align-item-center border-end border-5 border-bottom border-primary"><div class="d-flex align-items-center"><i id="dashboard" class="bi bi-speedometer"></i><p class="m-0">Dashboard</p></div></a> --}}
            <a href="#" class="aktif-link d-flex align-items-center" style="font-size: 14px"><i class="bi bi-speedometer" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</a>
            <a href="#" class=" d-flex align-items-center" style="font-size: 14px"><i class="bi bi-person" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User</a>
            <a href="#" class=" d-flex align-items-center" style="font-size: 14px"><i class="bi bi-graph-up" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Statistik</a>
            <a href="#" class=" d-flex align-items-center" style="font-size: 14px"><i class="bi bi-trash" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trash</a>
            <a href="#" class=" d-flex align-items-center" style="font-size: 14px"><i class="bi bi-bell" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notification</a>
            
        </div>
        <div>
        </div>
        <div>
            <a href="#" class=" d-flex align-items-center" style="font-size: 14px"><i class="bi bi-box-arrow-in-right" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout</a>
    
        </div>
    </nav>
@endrole