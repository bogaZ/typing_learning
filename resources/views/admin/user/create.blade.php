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
    <div class="d-flex justify-content-center">
        {{-- <a href="" class="btn btn-success shadow">Tambah</a> --}}
        <div class="card p-5 col-md-6">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="nama" id="nama">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="email" id="email">
            <label for="role">Role</label>
            {{-- <input type="role" name="role" id="role"> --}}
            <select name="role" id="role" class="form-control">
                <option value="" class="">pilih role</option>
            </select>
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="password" id="password">
            <label for="konfirmasi-password">Konfirmasi Password</label>
            <input type="password" name="confirm-password" class="form-control" placeholder="konfirmasi password" id="konfirmasi-password">
            <button class="btn btn-success mt-3">Buat User</button>
        </div>
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