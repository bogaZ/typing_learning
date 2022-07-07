@extends('layouts.master')

@section('content')
<div class="m-4">
    <div class="d-flex align-items-center">
        <div class="col-md-4 p-0">
            <button class="btn openbtn btn-primary open shadow" id="bukanav" type="button">
                <span id="icbukanav" class="fa fa-bars"></span>
            </button>
        </div>
        <div class="d-flex text-center align-items-center justify-content-center col-md-4 p-0 m-0">
            <h3 class="m-0">Mengubah User</h3>
        </div>
        <div class="d-flex text-center align-items-center flex-row-reverse col-md-4 p-0">
            <p class="m-0">
                <a href="{{route('home')}}" class="text-decoration-none">Dashboard</a>
                /
                <a href="{{route('user.index')}}" class="text-decoration-none">User</a>
                / Mengubah User
            </p>
        </div>
    </div>
</div>
<div class="m-4">
    <form action="{{route('user.update', $user->id)}}" method="post">
    @csrf
    @method('PATCH')
        <div class="d-flex justify-content-center">
        {{-- <a href="" class="btn btn-success shadow">Tambah</a> --}}
            <div class="card p-5 col-md-6">
                <label for="nama">Nama</label>
                <input type="text" name="nama" value="{{$user->name}}" class="form-control" placeholder="nama" id="nama">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{$user->email}}" class="form-control" placeholder="email" id="email">
                <label for="role">Role</label>
                {{-- <input type="role" name="role" id="role"> --}}
                @if($user->id == 1 && $user->name == 'admin')
                <span type="text" class="form-control" placeholder="admin" style="background-color: #e9ecef; cursor: default">admin</span>
                @else
                <select name="role" id="role" class="form-control">
                    <option value="" disabled selected hidden>pilih role</option>
                    @foreach($role as $roles)
                        <option value={{$roles->name}}
                            @if($userrole == $roles->id)
                                selected
                            @endif class="">{{$roles->name}}</option>
                    @endforeach
                </select>
                @endif
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="password" id="password">
                <label for="konfirmasi-password">Konfirmasi Password</label>
                <input type="password" name="confirm-password" class="form-control" placeholder="konfirmasi password" id="konfirmasi-password">
                <button class="btn btn-success mt-3">Buat User</button>
            </div>
        </div>
    </form>
</div>
<div class="d-flex justify-content-between m-4">
</div>
{{-- script --}}
{{-- <script>
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
</script> --}}
<script>
    document.getElementById("user").classList.add("aktif-link");
</script>
@endsection