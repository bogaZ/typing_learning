@extends('layouts.master')

@section('content')
@role('user')
    <div class="container">
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{ session('sukses') }}
            </div>
        @endif
        <div class="row" id="content">
            @include('layouts.menu')
        </div>
    </div>
    <script type="text/javaScript">
        $('body').addClass('bg-play');
    </script>
@endrole

{{-- end user home --}}

{{-- admin home --}}
@role('admin')
<div class="m-4">
    <div class="d-flex">
        <div class="col-md-4 p-0">
            <button class="btn openbtn btn-primary open" id="bukanav" type="button">
                <span id="icbukanav" class="fa fa-bars"></span>
            </button>
        </div>
        <div class="d-flex align-items-center justify-content-center col-md-4 p-0 m-0">
            <h3 class="m-0 fw-bold">Home</h3>
        </div>
        <div class="d-flex align-items-center flex-row-reverse col-md-4 p-0">
            <p class="m-0">
                <a href="#"></a>
                Dashboard
            </p>
        </div>
    </div>
</div>
<div class="d-flex justify-content-between mx-4">
    <div class="p-0 shadow col-md-3 gradienbiru">
        <div class="d-flex flex-column">
            <h6 class="text-center text-white fw-bold p-2 border-bottom m-0">User</h6>
            <div class="px-4 py-2 d-flex align-items-center justify-content-between">
                <i class="bi bi-person text-white" style="font-size: 50px"></i>
                <div class="d-flex justify-content-evenly">
                    <span class="h4 m-0 text-white">{{$jumlahuser}}</span>
                    <p class="text-white m-0">&nbsp;pendaftar</p>
                </div>
            </div>
            
        </div>
        <a href="{{route('user.index')}}" class="bg-primary d-flex justify-content-center p-2 text-decoration-none text-white">view</a>
    </div>
    <div class="p-0 shadow col-md-3 gradienbiru">
        <div class="d-flex flex-column">
            <h6 class="text-center text-white fw-bold p-2 border-bottom m-0">Statistik</h6>
            <div class="px-4 py-2 d-flex align-items-center justify-content-between">
                <i class="bi bi-graph-up text-white" style="font-size: 50px"></i>
                <div class="d-flex">
                    <span class="h4 m-0 text-white">{{$jumlahuser}}</span>
                    <p class="text-white m-0">&nbsp;orang mengetik</p>
                </div>
            </div>
            
        </div>
        <a href="{{route('user.index')}}" class="bg-primary d-flex justify-content-center p-2 text-decoration-none text-white">view</a>
    </div>
    <div class="p-0 shadow col-md-3 gradienbiru">
        <div class="d-flex flex-column">
            <h6 class="text-center text-white fw-bold p-2 border-bottom m-0">Notification</h6>
            <div class="px-4 py-2 d-flex align-items-center justify-content-between">
                <i class="bi bi-bell text-white" style="font-size: 50px"></i>
                <div class="d-flex">
                    <span class="h4 m-0 text-white">{{$jumlahuser}}</span>
                    <p class="text-white m-0">&nbsp;pemberitahuan</p>
                </div>
            </div>
        </div>
        <a href="{{route('user.index')}}" class="bg-primary d-flex justify-content-center p-2 text-decoration-none text-white">view</a>
    </div>
</div>
<div class="d-flex justify-content-between m-4">
    <div class="col-md-8 p-0 card d-flex justify-content-center">
        <canvas id="Chart" style="width:100%;" class="p-3 bg-white rounded border-none shadow"></canvas>
    </div>
    <div class="col-md-3 p-0 card">
        <canvas id="pie" style="height: 100%" class="p-3 bg-white rounded border-none shadow"></canvas>
        <p style="height: 100%" class="m-0 bg-light card p-3"></p>
    </div>
</div>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.js"></script> --}}
<script>
    document.getElementById("dashboard").classList.add("aktif-link");
</script>
@include('admin.dashboardstats')
@endrole
@endsection
