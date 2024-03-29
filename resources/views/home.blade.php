@extends('layouts.master')

@section('content')
@role('user')
    <div class="container">
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{ session('sukses') }}
            </div>
        @endif
        <div class="row py-5" id="content">
            @include('layouts.menu')
            {{-- @include('user.menu.select') --}}
            @include('user.menu.kesulitan')
            @include('user.pemrograman.index')
        </div>
        <!-- Modal -->
        @include('user.pengaturan.profil')
        @include('user.pengaturan.bahasa')
        @include('user.pengaturan.help')
        @include('user.pengaturan.alertnormal')
        @include('user.pengaturan.alertsusah')
    </div>
    @include('edit')
    <script type="text/javaScript">
        $('.menu').removeClass('d-none');
        
        $(document).ready(function(){            
            $('#mulai').click(function () {
                $('.menu').addClass('d-none');
                $('.kesulitan').removeClass('d-none');
            })
            $('.kembalimulai').click(function () {
                $('.menu').removeClass('d-none');
                $('.kesulitan').addClass('d-none');
            })
            $('#pemrograman').click(function () {
                $('.kesulitan').addClass('d-none');
                $('.pemrograman').removeClass('d-none');
            })
            $('#kembalipemrograman').click(function () {
                $('.pemrograman').addClass('d-none');
                $('.kesulitan').removeClass('d-none');
            })
        })
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
            <h3 class="m-0 fw-bold">Dashboard</h3>
        </div>
        <div class="d-flex align-items-center flex-row-reverse col-md-4 p-0">
            <p class="m-0">
                <a href="#"></a>
                Dashboard
            </p>
        </div>
    </div>
</div>
<div class="row justify-content-between mx-4">
    <div class="p-0 shadow col-lg-3 mb-3 gradienbiru">
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
    <div class="p-0 shadow col-lg-3 mb-3 gradienbiru">
        <div class="d-flex flex-column">
            <h6 class="text-center text-white fw-bold p-2 border-bottom m-0">Statistik</h6>
            <div class="px-4 py-2 d-flex align-items-center justify-content-between">
                <i class="bi bi-graph-up text-white" style="font-size: 50px"></i>
                <div class="d-flex">
                    <span class="h4 m-0 text-white">{{$jumlahmengetik}}</span>
                    <p class="text-white m-0">&nbsp;mengetik</p>
                </div>
            </div>
            
        </div>
        <a href="{{route('user.index')}}" class="bg-primary d-flex justify-content-center p-2 text-decoration-none text-white">view</a>
    </div>
    <div class="p-0 shadow col-lg-3 mb-3 gradienbiru">
        <div class="d-flex flex-column">
            <h6 class="text-center text-white fw-bold p-2 border-bottom m-0">Notifikasi</h6>
            <div class="px-4 py-2 d-flex align-items-center justify-content-between">
                <i class="bi bi-bell text-white" style="font-size: 50px"></i>
                <div class="d-flex">
                    <span class="h4 m-0 text-white">{{$jumlahnotif}}</span>
                    <p class="text-white m-0">&nbsp;pemberitahuan</p>
                </div>
            </div>
        </div>
        <a href="{{route('notifikasi.index')}}" class="bg-primary d-flex justify-content-center p-2 text-decoration-none text-white">view</a>
    </div>
</div>
<div class="row justify-content-between mx-4">
    <div class="col-lg-8 p-0 mb-3">
        {{-- <div class="mb-3 p-0 m-0 col-md-12 border-none d-flex">
            <select name="" id="" class="form-control col-md-3 me-2 border-none shadow">
                <option value="">Hari</option>
                <option value="">Minggu</option>
                <option value="">Bulan</option>
            </select>
            <button type="button" class="col-md-2 btn btn-primary shadow">submit</button>
        </div> --}}
        <div class="bg-white p-5 rounded shadow mb-3">
            <h4 class="fw-bold text-center">Statistik Hari Ini</h4>
            <table id="" class="my-3 rounded rounded-3" style="width:100%">
                <thead>
                    <tr>
                        <th>Tingkat Kesulitan</th>
                        <th>Skor Tertinggi</th>
                        <th>Total Dimainkan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($scoreStats as $item)    
                    <tr>
                        <td>{{$item['nama']}}</td>
                        <td>{{$item['high_score']}}</td>
                        <td>{{$item['jumlah_dimainkan']}}</td>
                        {{-- <td>{{$item['nama']}}</td>
                        <td>{{$item['nama']}}</td> --}}
                        {{-- <td>n</td>
                        <td>n</td>
                        <td>n</td> --}}
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-3 p-0 mb-3">
        <canvas id="pie" style="height: 100%; max-height: 400px" class="p-3 bg-white rounded border-none shadow"></canvas>
        <div class="bg-white p-3 rounded border-none shadow my-3">
            <h6 class="text-center fw-bold">persentasi</h6>
            <p class="m-0">custom: {{round($karakter->where('bahasa_id', 1)->count() * 100 / $karakter->count(),2)}}%</p>
            <p class="m-0">indonesia: {{round($karakter->where('bahasa_id', 2)->count() * 100 / $karakter->count(),2)}}%</p>
            <p class="m-0">inggris: {{round($karakter->where('bahasa_id', 3)->count() * 100 / $karakter->count(),2)}}%</p>
        </div>
        {{-- <p style="height: 100%" class="m-0 bg-light card p-3"></p> --}}
    </div>
</div>
{{-- {{$users}} --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.js"></script> --}}
<script>
    document.getElementById("dashboard").classList.add("aktif-link");
</script>
@include('admin.dashboardstats')
@endrole

@guest
    @include('user.guest.index')
    {{-- @include('user.guest.js') --}}
@endguest

@endsection
