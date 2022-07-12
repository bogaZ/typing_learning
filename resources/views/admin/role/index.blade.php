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
            <h3 class="m-0">Character</h3>
        </div>
        <div class="d-flex align-items-center flex-row-reverse col-md-4 p-0">
            <p class="m-0">
                <a href="{{route('home')}}" class="text-decoration-none">Dashboard</a>
                / Role
            </p>
        </div>
    </div>
</div>
<div class="m-4">
    <div class="d-flex justify-content-between">
        <a href="{{route('user.index')}}" class="btn btn-primary shadow">User</a>
        <a href="{{route('role.create')}}" class="btn btn-success shadow">Tambah Role</a>
        {{-- <div>
            <a href="{{route('custom.create')}}" class="btn btn-success shadow">Tambah Character</a>
        </div> --}}
    </div>
    @if(session()->get('sukses'))
        <div class="alert alert-success mt-4">
            {{session()->get('sukses')}}
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
                    {{-- <th>Id</th> --}}
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="gradienbiru2 text-dark">
                @foreach($alldata as $i=>$data)
                <tr>
                    <td>{{++$i}}.</td>
                    {{-- <td>
                        <a href="{{route('user.show', $data->id)}}" class="text-decoration-none text-primary">
                            {{$data->name}}
                        </a>
                    </td>
                    <td>{{$data->id}}</td>
                    <td>{{$data->email}}</td>
                    <td>
                        @if (!empty($data->getRoleNames()))
                            @foreach ($data->getRoleNames() as $role)
                            <div class="d-flex align-items-center">
                                <label for="" class="m-0 p-1 text-capitalize badge badge-success">{{$role}}</label>                                
                            </div>
                            @endforeach
                            
                        @endif
                    </td> --}}
                    {{-- <td>{{$data->id}}</td> --}}
                    <td>{{$data->name}}</td>
                    {{-- <td><button class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button></td> --}}
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary rounded" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <i class="bi bi-pencil-square text-white"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-lg-end">
                                <li><a href="{{route('character.edit', $data->id)}}" class="dropdown-item">Ubah</a></li>
                                <li>
                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete{{$data->id}}">Hapus</a>
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
                                Apakah anda yakin mau menghapus type character "{{$data->name}}"?
                            </h4>
                        </div>
                        <form id="logout-form" action="{{ route('role.destroy', $data->id) }}" method="POST">
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
    document.getElementById("role").classList.add("aktif-link");
</script>
@endsection