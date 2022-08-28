@extends('layouts.master')

@section('content')
<div class="m-4">
    <div class="d-flex align-items-center">
        <div class="col-md-4 p-0">
            <button class="btn openbtn btn-primary open shadow" id="bukanav" type="button">
                <span id="icbukanav" class="fa fa-bars"></span>
            </button>
        </div>
        <div class="d-flex align-items-center justify-content-center col-md-4 p-3 m-0">
            <h3 class="m-0">Membuat Role</h3>
        </div>
        <div class="d-flex align-items-center flex-row-reverse col-md-4 p-0">
            <p class="m-0">
                <a href="{{route('home')}}" class="text-decoration-none">Dashboard</a>
                /
                <a href="{{route('role.index')}}" class="text-decoration-none">Role</a>
                / Membuat Role
            </p>
        </div>
    </div>
</div>
<div class="m-4">
    <div class="p-0 d-flex justify-content-center">
        <div class="p-5 card bg-white shadow col-md-5">
            <form action="{{route('role.store')}}" method="post">
                @csrf
                <label for="characterinput">Nama Role</label>
                <input type="text" name="name" id="characterinput" class="form-control mb-3">
                <button type="submit" class="btn btn-primary col-md-12">Submit</button>
            </form>
        </div>
    </div>
</div>
<div>
</div>
<script>
    document.getElementById("role").classList.add("aktif-link");
</script>
@endsection