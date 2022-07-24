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
            @if(!Route::is('bahasa.create'))
            <h3 class="m-0">Create Bahasa Pemrograman</h3>
            @else
            <h3 class="m-0">Create Bahasa Character</h3>
            @endif
        </div>
        <div class="d-flex align-items-center flex-row-reverse col-md-4 p-0">
            <p class="m-0">
                <a href="{{route('home')}}" class="text-decoration-none">Dashboard</a>
                /
                @if(!Route::is('bahasa.create'))
                <a href="{{route('pemrograman.index')}}" class="text-decoration-none">Bahasa Pemrograman</a>
                @else
                <a href="{{route('bahasa.index')}}" class="text-decoration-none">Bahasa Character</a>
                @endif
                / Create
            </p>
        </div>
    </div>
</div>
<div class="m-4">
    <div class="p-0 d-flex justify-content-center">
        <div class="p-5 card bg-white shadow col-md-5">
            @if(!Route::is('bahasa.create'))
            <form action="{{route('pemrograman.store')}}" method="post">
            @else
            <form action="{{route('bahasa.store')}}" method="post">
            @endif
                @csrf
                <label for="bahasainput">Nama Bahasa</label>
                <input type="text" name="name" id="bahasainput" class="form-control mb-3">
                <button type="submit" class="btn btn-primary col-md-12">Submit</button>
            </form>
        </div>
    </div>
</div>
<div>
</div>
<script>
    document.getElementById("bahasa").classList.add("aktif-link");
</script>
@endsection