@extends('layouts.master')

@section('content')
<div class="m-4">
    <div class="d-flex">
        <div class="col-md-4 p-0">
            <button class="btn openbtn btn-primary open shadow" id="bukanav" type="button">
                <span id="icbukanav" class="fa fa-bars"></span>
            </button>
        </div>
        <div class="d-flex align-items-center justify-content-center col-md-4 p-0 m-0">
            <h3 class="m-0">Menambah User</h3>
        </div>
        <div class="d-flex align-items-center flex-row-reverse col-md-4 p-0">
            <p class="m-0">
                <a href="{{route('home')}}" class="text-decoration-none">Dashboard</a>
                /
                <a href="{{route('user.index')}}" class="text-decoration-none">User</a>
                / Menambah User
            </p>
        </div>
    </div>
</div>
<div class="m-4">
    <div class="d-flex flex-row-reverse">
        <a href="" class="btn btn-success shadow">Tambah</a>
    </div>
</div>
<div class="d-flex mx-4">
    <div class="col-md-12 w-100 p-0 shadow p-4 rounded bg-white rounded-3">
        {{-- <button class="btn btn-success mb-3">Tambah +</button> --}}
        <table id="example1" class="display my-3 border rounded rounded-3 border-dark" style="width:100%">
            <thead class="gradienbiru text-white">
                <tr>
                    <th>Name</th>
                    <th>id</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aktivitas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="gradienbiru2 text-dark">
                
            </tbody>
        </table>
    </div>
</div>
<div class="d-flex justify-content-between m-4">
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
@endsection