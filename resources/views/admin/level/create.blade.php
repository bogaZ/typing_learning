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
            <h3 class="m-0">Menambah Level</h3>
        </div>
        <div class="d-flex align-items-center flex-row-reverse col-md-4 p-0">
            <p class="m-0">
                <a href="{{route('home')}}" class="text-decoration-none">Dashboard</a>
                /
                <a href="{{route('level.index')}}" class="text-decoration-none">Level</a>
                / Menambah
            </p>
        </div>
    </div>
</div>
<div class="m-4">
    <div class="p-0 d-flex justify-content-center">
        <div class="p-5 card bg-white shadow col-md-5">
            <form action="{{route('level.store')}}" method="post">
                @csrf
                <label for="levelinput">Level</label>
                <input type="number" max="10" min="1" name="level" id="levelinput" required class="form-control mb-3">
                <label for="scoreinput">Score</label>
                <input type="number" max="200" min="0" name="score" id="scoreinput" required class="form-control mb-3">
                <button type="submit" class="btn btn-primary col-md-12">Submit</button>
            </form>
        </div>
    </div>
</div>
<div>
</div>
<script>
    document.getElementById("charactertext").classList.add("aktif-link");
</script>
@endsection