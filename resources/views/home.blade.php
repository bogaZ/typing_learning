@extends('layouts.master')

@section('content')
@role('pengguna')
    <div class="container">
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{ session('sukses') }}
            </div>
        @endif
        {{-- user home --}}
        {{-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="shadow p-3 mb-5 rounded border border-dark bg-white">
                    <div class="card-body">
                        <div class="my-5 mx-5" id="content">
                            <h6 class="text-center fw-bold">Pilih Bahasa</h6>
                            <br>
                            <div class="row">
                                <div class="d-grid mx-auto">
                                    <button id="bahasaindonesia" class="btn btn-primary block fw-bold">bahasa indonesia</button>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="d-grid mx-auto">
                                    <button id="bahasainggris" class="btn btn-primary block fw-bold">bahasa inggris</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- user bahasa --}}
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="shadow p-3 mb-5 rounded border border-dark bg-white">
                    <div class="card-body">
                        <div class="my-5 mx-5" id="content">
                            {{-- <div class="row">
                                <div class="d-grid mx-auto">
                                    <button id="kembali" class="btn btn-danger block">Kembali</button>
                                </div>
                            </div>
                            <br> --}}
                            <div class="" id="content">
                                <h6 class="text-center fw-bold">Pilih</h6>
                                <br>
                                <div class="row">
                                    <div class="d-grid mx-auto">
                                        <button id="mulai" class="btn btn-primary block fw-bold">Mulai</button>
                                    </div>
                                    {{-- {{$kata}}
                                    <br>
                                    jumlah:
                                    {{$jumlahkata}} --}}
                                </div>
                                <br>
                                <div class="row">
                                    <div class="d-grid mx-auto">
                                        <button id="custom" class="btn btn-primary block fw-bold">Buat Karakter</button>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="d-grid col-md-6 justify-content-md-start">
                                    <button id="setting" class="btn btn-secondary block"><i class="bi bi-gear-fill"></i></button>
                                </div>
                                <div class="d-grid col-md-6 justify-content-md-end">
                                    <button id="reload" class="btn btn-secondary block"><i class="bi bi-arrow-clockwise"></i></button>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    $('#mulai').click(function () {
                                        $('#content').load('/menuplay')
                                    })
                                    $('#custom').click(function () {
                                        $('#content').load('/menucustom')
                                    })
                                })
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
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
            <h3 class="m-0">Home</h3>
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
    <div style="border-radius: 10px" class="shadow col-md-3 gradienbiru p-2">
        <div class="d-flex flex-column">
            <h6 class="text-center text-white fw-bold">User</h6>
            <i class="bi bi-person" style="font-size: 50px"></i>
            <button class="btn btn-light mx-5 text-center" style="border-radius: 20px" type="button">View</button>
        </div>
    </div>
    <div style="border-radius: 10px" class="shadow col-md-3 gradienbiru p-2">
        <div>
            <h6 class="text-center text-white fw-bold">Statistik</h6>
        </div>
    </div>
    <div style="border-radius: 10px" class="shadow col-md-3 gradienbiru p-2">
        <div>
            <h6 class="text-center text-white fw-bold">Notification</h6>
        </div>
    </div>
</div>
<div class="d-flex justify-content-between m-4">
    <div class="col-md-8 p-0">p</div>
    <div class="col-md-3 p-0">p</div>
</div>
{{-- script --}}
<script>
    $(document).ready(function () {
        $('#bukanav').click(function () {
            // $('#dashboard').text('/menuplay')
            if($('#bukanav').hasClass('open')){
                $('#bukanav').removeClass('open btn-primary');
                $('#bukanav').addClass('btn-danger');
                $('#icbukanav').removeClass('fa fa-bars');
                $('#icbukanav').addClass('fa fa-times');
                document.getElementById("mySidebar").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            }else{
                $('#bukanav').removeClass('btn-danger');
                $('#bukanav').addClass('open btn-primary');
                $('#icbukanav').removeClass('fa fa-times');
                $('#icbukanav').addClass('fa fa-bars');
                document.getElementById("mySidebar").style.width = "75px";
                document.getElementById("main").style.marginLeft= "75px";
            }
        })
    });
</script>
@endrole
{{-- end admin home --}}
@endsection
