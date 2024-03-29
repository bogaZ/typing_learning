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
@role('user')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5 py-2 mb-5 justify-content-between">
        <a href="{{route('welcome')}}" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-keyboard me-2 text-white"></i>NgeTeks</h1>
        </a>
        {{-- @if(Route::has('playmudah')) --}}
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button> --}}
        {{-- @endif --}}
        {{-- <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
            @auth
                <div class="d-flex justify-content-end">
                    <a href="{{route('home')}}" class="btn btn-primary py-2 px-4">Home</a>
                    <a href="javascript:void(0)" class="btn btn-danger py-2 px-4 ms-3" style="font-size: 14px" data-bs-toggle="modal" data-bs-target="#logout">Keluar</a>
                    
                </div>
            @else
                @if(Route::has('login'))
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-3">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 ms-3">Register</a>
                    @endif
                @endif
            @endauth
        </div> --}}
        {{-- <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
            @auth
                <div class="d-flex justify-content-end">
                    <a href="{{route('home')}}" class="btn btn-primary py-2 px-4">Home</a>
                    <a href="javascript:void(0)" class="btn btn-danger py-2 px-4 ms-3" style="font-size: 14px" data-bs-toggle="modal" data-bs-target="#logout">Keluar</a>
                    
                </div>
            @else
                @if(Route::has('login'))
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-3">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 ms-3">Register</a>
                    @endif
                @endif
            @endauth
        </div> --}}
        <div class="btn-group">
            <a href="javascript:void(0)" type="button" title="menu" class="dropdown-toggle text-decoration-none text-white" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                {{-- <div style="white-space: pre-line" class="d-flex">
                    Mudah : Level 1
                    Normal: Level 1
                    Susah : Level 1
                </div> --}}
                <li><button class="dropdown-item" type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-person-fill"></i> Profil</button></li>
                <li><a href="{{route('statistik.index')}}" class="dropdown-item"><i class="bi bi-graph-up"></i> Statistik</a></li>
                {{-- <li><button class="dropdown-item" type="button"><i class="bi bi-gear-fill"></i> Pengaturan</button></li> --}}
                <li><button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#logout"><i class="bi bi-box-arrow-in-right"></i> Keluar</button></li>
            </ul>
        </div>
    </nav>
    <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="p-3 border-bottom text-center d-flex justify-content-center align-items-center">
                    <h3 class="fw-bold text-center m-0" id="exampleModalLabel">Keluar</h3>
                </div>
                <div class="modal-body text-center row">
                    <i class="bi bi-exclamation-circle" style="font-size: 50px"></i>
                    <h4 class="m-0 p-3">
                        Apakah anda yakin mau keluar?
                    </h4>
                </div>
                <div class="m-3 d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    {{-- <button type="submit" class="btn btn-primary">Save changes</button> --}}
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger py-2 px-4 ms-3">Ya</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endrole
@role('admin')
    <nav id="mySidebar" class="p-0 sidebar bg-white shadow-lg d-flex justify-content-around flex-column">
        {{-- <div class="d-flex flex-row-reverse">
            <span>Helo Admin,</span>
        </div> --}}
        <div class="row justify-content-center">
            <img style="width: 80%" class="p-0" src="{{asset('bagus/admin/img/profil.png')}}" alt="" srcset="">
            {{-- <p href="#" alt="dashboard" class="" disabled style="font-size: 14px"><i class="bi bi-tras" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Halo&nbsp;{{$username}}</p> --}}
            <p href="#" alt="dashboard" class="text-center p-3" disabled style="font-size: 14px">{{Auth::user()->name}}</p>
        </div>
        {{-- <div class="row justify-content-center">
        </div> --}}
        <div>

            {{-- <div class="btnclosed">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            </div> --}}
            {{-- <a href="#" class="position-relative align-item-center border-end border-5 border-bottom border-primary"><div class="d-flex align-items-center"><i id="dashboard" class="bi bi-speedometer"></i><p class="m-0">Dashboard</p></div></a> --}}
            <a id="dashboard" href="{{route('home')}}" alt="dashboard" class="{{ Route::is('about') ? 'bg-primary' : '' }} d-flex align-items-center" style="font-size: 14px"><i class="bi bi-speedometer" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</a>
            <a id="user" href="{{route('user.index')}}" id="user" alt="dashboard" class="d-flex align-items-center" style="font-size: 14px"><i class="bi bi-person-fill" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User</a>
            <a id="statistik" href="{{route('statistik.index')}}" alt="dashboard" class="d-flex align-items-center" style="font-size: 14px"><i class="bi bi-graph-up" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Statistik</a>
            {{-- <a id="role" href="{{route('role.index')}}" alt="dashboard" class="d-flex align-items-center" style="font-size: 14px"><i class="bi bi-person-lines-fill" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Role</a> --}}
            <a id="charactertext" href="{{route('custom.index')}}" alt="dashboard" class="d-flex align-items-center" style="font-size: 14px"><i id="" class="bi bi-file-earmark-text-fill" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teks</a>
            <a id="notifikasi" href="{{route('notifikasi.index')}}" alt="dashboard" class="d-flex align-items-center" style="font-size: 14px"><i class="bi bi-bell" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notifikasi</a>
            {{-- <a id="trash" href="#" alt="dashboard" class="d-flex align-items-center" style="font-size: 14px"><i class="bi bi-trash" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trash</a> --}}
            <a id="bahasa" href="{{route('bahasa.index')}}" alt="bahasa" class="d-flex align-items-center" style="font-size: 14px"><i class="bi bi-globe2" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahasa</a>
            
        </div>
        <div>
        </div>
        <div>
            {{-- <a href="#modallogout" id="logout" class="d-flex align-items-center" style="font-size: 14px"><i class="bi bi-box-arrow-in-right" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout</a> --}}
            <a href="javascript:void(0)" class="d-flex align-items-center" style="font-size: 14px" data-bs-toggle="modal" data-bs-target="#logout">
                <i class="bi bi-box-arrow-in-right" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keluar
            </a>
            {{-- <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="d-flex align-items-center" style="font-size: 14px"><i class="bi bi-box-arrow-in-right" style="font-size: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout</a> --}}
        </div>
    </nav>
    <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="p-3 border-bottom text-center d-flex justify-content-center align-items-center">
                    <h3 class="fw-bold text-center m-0" id="exampleModalLabel">Keluar</h3>
                </div>
                <div class="modal-body text-center row">
                    <i class="bi bi-exclamation-circle" style="font-size: 50px"></i>
                    <h4 class="m-0 p-3">
                        Apakah anda yakin mau keluar?
                    </h4>
                </div>
                <div class="m-3 d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    {{-- <button type="submit" class="btn btn-primary">Save changes</button> --}}
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger py-2 px-4 ms-3">Ya</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        document.getElementById("dashboard").classList.add("aktif-link");
    </script> --}}
@endrole
@guest
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5 py-2 mb-5">
    <a href="{{route('welcome')}}" class="navbar-brand p-0">
        <h1 class="m-0"><i class="fa fa-keyboard me-2 text-white"></i>NgeTeks</h1>
    </a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <div class="d-flex justify-content-end">
            <a href="{{route('login')}}" class="btn btn-primary py-2 px-4">Login</a>
            {{-- @if(Route::is('register'))
            <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-3">Login</a>          
            @else --}}
            <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 ms-3">Register</a>          
            {{-- @endif --}}
        </div>
    </div>
</nav>
@endauth