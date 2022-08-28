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
            <h3 class="m-0 text-center">Mengubah Tingkat Kesulitan</h3>
        </div>
        <div class="d-flex align-items-center flex-row-reverse col-md-4 p-0">
            <p class="m-0">
                <a href="{{route('home')}}" class="text-decoration-none">Dashboard</a>
                /
                <a href="{{route('character.index')}}" class="text-decoration-none">Tingkat Kesulitan Mengetik</a>
                / Mengubah
            </p>
        </div>
    </div>
</div>
<div class="m-4">
    <div class="p-0 d-flex justify-content-center">
        <div class="p-5 card bg-white shadow col-md-5">
            <form action="{{route('character.update', $data->id)}}" method="post">
                @csrf
                @method('PATCH')
                {{-- <label for="characterinput">Nama Tingkat Kesulitan</label>
                <input type="text" name="name" value="{{$data->name}}" id="characterinput" class="form-control mb-3"> --}}
                <label for="characterinput">Skor Tingkat Kesulitan {{$data->name}}</label>
                <input type="number" min="0" max="250" name="name" value="{{$data->score}}" id="characterinput" class="form-control mb-3">
                <button type="submit" class="btn btn-primary col-md-12">Submit</button>
            </form>
        </div>
    </div>
</div>
<div>
</div>
<script type="text/JavaScript">
    document.getElementById("charactertext").classList.add("aktif-link");
</script>
@endsection