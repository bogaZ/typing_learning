@extends('layouts.master')

@role('admin')
@section('content')
<div class="m-4">
    <div class="d-flex align-items-center">
        <div class="col-md-4 p-0">
            <button class="btn openbtn btn-primary open shadow" id="bukanav" type="button">
                <span id="icbukanav" class="fa fa-bars"></span>
            </button>
        </div>
        <div class="text-center d-flex align-items-center justify-content-center col-md-4 p-0 m-0">
            <h3 class="m-0">Notifikasi</h3>
        </div>
        <div class="text-center d-flex align-items-center flex-row-reverse col-md-4 p-0">
            <p class="m-0">
                <a href="{{route('home')}}" class="text-decoration-none">Dashboard</a>
                / Notifikasi
            </p>
        </div>
    </div>
</div>
<div class="m-4">
    {{-- <div class="d-flex justify-content-between">
        <a href="{{route('role.index')}}" class="btn btn-primary shadow">Role</a>
        <a href="{{route('user.create')}}" class="btn btn-success shadow">Tambah</a>
    </div> --}}
    @if(session()->get('sukses'))
        <div class="alert alert-success mt-4">
            {{session()->get('sukses')}}
        </div>
    @elseif(session()->get('gagal'))
        <div class="alert alert-danger mt-4">
            {{session()->get('gagal')}}
        </div>
    @endif
</div>
<div class="d-flex mx-4">
    <div class="col-md-12 w-100 p-0 shadow p-4 rounded bg-white rounded-3">
        {{-- <button class="btn btn-success mb-3">Tambah +</button> --}}
        <table id="example1" class="display my-3 border rounded rounded-3 border-dark" style="width:100%">
            <thead class="gradienbiru text-white">
                <tr>
                    <th>No</th>
                    <th>User id</th>
                    <th>Name</th>
                    <th>Aktivitas</th>
                    <th>Log</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="gradienbiru2 text-dark">
                @foreach($alldata as $i=>$data)
                <tr>
                    <td>{{++$i}}.</td>
                    <td>{{$data->user_id}}</td>
                    <td>{{$data->user->name}}</td>
                    <td>{{$data->activity}}</td>
                    <td>{{$data->log}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$data->id}}">Hapus</button>
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
                                Apakah anda yakin mau notifikasi user "{{$data->user->name}}"?
                            </h4>
                        </div>
                        <form id="logout-form" action="{{ route('notifikasi.destroy', $data->id) }}" method="POST">
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
    document.getElementById("notifikasi").classList.add("aktif-link");
</script>
@endsection
@endrole