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
        <div class="row justify-content-center">
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
        </div>
    </div>
@endrole
{{-- end user home --}}

{{-- admin home --}}
@role('admin')
{{-- <div class="row">
    <div class="col-md-3 bg-white">p</div>
    <div class="col-md-9 bg-dark">p</div>
</div> --}}
{{-- <div id="mySidebar" class="sidebar bg-white shadow-lg">
    <div class="btnclosed">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    </div>
    <a href="#" class="align-item-center border-end border-5 border-bottom border-primary"><i class="bi bi-speedometer"></i> Dashboard</a>
    <a href="#" ><i class="bi bi-graph-up"></i> Statistik</a>
    <a href="#" ><i class="bi bi-trash"></i> Trash</a>
    <a href="#" ><i class="bi bi-bell"></i> Notification</a>
</div> --}}
  
  {{-- <div id="main">
    <button class="openbtn btn-primary" onclick="openNav()">☰</button>
  </div> --}}
<div class="m-5">
    <div class="d-flex justify-content-between align-items-center">
        <button class="btn openbtn btn-primary open" id="bukanav" type="button">
            <span id="icbukanav" class="fa fa-bars"></span>
        </button>
        <h3>Pagename</h3>
        <a href="">tes</a>
    </div>
</div>
<div class="mx-5 card">kontent</div>

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
