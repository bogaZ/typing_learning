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
            <h3 class="m-0">Level</h3>
        </div>
        <div class="d-flex align-items-center flex-row-reverse col-md-4 p-0">
            <p class="m-0">
                <a href="{{route('home')}}" class="text-decoration-none">Dashboard</a>
                / Level
            </p>
        </div>
    </div>
</div>
<div class="m-4">
    <div class="d-flex justify-content-between">
        <div>            
            {{-- <a href="{{route('character.index')}}" class="btn btn-primary shadow">Tingkat Kesulitan Karakter</a> --}}
            <a href="{{route('custom.index')}}" class="btn btn-primary shadow">Karakter</a>
        </div>
        <a href="{{route('level.create')}}" class="btn btn-success shadow">Tambah Level</a>
    </div>
    @if(session()->get('sukses'))
        <div class="alert alert-success mt-4">
            {{session()->get('sukses')}}
        </div>
    @endif
</div>
<div class="d-flex mx-4">
    <div class="col-md-12 w-100 p-0 shadow p-4 rounded bg-white rounded-3">
        <table id="example1" class="display my-3 border rounded rounded-3 border-dark" style="width:100%">
            <thead class="gradienbiru text-white">
                <tr>
                    <th>No</th>
                    <th>Level</th>
                    <th>Score</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="gradienbiru2 text-dark">
                @foreach($alldata as $i=>$data)
                <tr>
                    <td>{{++$i}}.</td>
                    <td>{{$data->level}}</td>
                    <td>{{$data->score}} kpm</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary rounded" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <i class="bi bi-pencil-square text-white"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-lg-end">
                                <li><a href="{{route('level.edit', $data->id)}}" title="ubah" class="dropdown-item">Ubah</a></li>
                                <li>
                                    <a href="javascript:void(0)" title="hapus" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete{{$data->id}}">Hapus</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @foreach($alldata as $data)
            <div class="modal fade" id="delete{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="p-3 border-bottom text-center d-flex justify-content-center align-items-center">
                            <h3 class="fw-bold text-center m-0" id="exampleModalLabel">Hapus</h3>
                        </div>
                        <div class="modal-body text-center row">
                            <i class="bi bi-exclamation-circle" style="font-size: 50px"></i>
                            <h4 class="m-0 p-3">
                                Apakah anda yakin mau menghapus level "{{$data->level}}" yang memiliki batas score "{{$data->score}} kpm"?
                            </h4>
                        </div>
                        <form id="logout-form" action="{{ route('level.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="m-3 d-flex justify-content-evenly">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                <button type="submit" class="btn btn-danger py-2 px-4">Ya</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="d-flex justify-content-between m-4">
</div>
<script>
    document.getElementById("charactertext").classList.add("aktif-link");
</script>
@endsection