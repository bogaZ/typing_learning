@extends('layouts.master')

@section('content')
@role('user')
{{-- <div class="flex-row-reverse d-flex">
    <a class="text-right text-dark fw-bold text-decoration-none">Select</a> /
    <a id="dashboard" class="text-right fw-bold text-decoration-none" href="javascript:void(0)">Dashboard</a>
</div>
<div class="col-md-12">
    <div class="shadow p-3 mb-5 rounded bg-white">
        <div class="card-body">
            <div class="my-5 mx-5">
                <div class="row">
                    <div class="col-md-4 p-0">
                        <div class="mx-auto">
                            <a id="kembali" href="#" class="text-decoration-none fw-bold">Kembali</a>
                        </div>
                    </div>
                    <h5 class="text-center fw-bold">Karakter belum dibuat</h5> --}}
                    {{-- @foreach ($namakarakter as $cek)
                    <div class="col-md-12 p-0 mb-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="">
                                <a href="" class="text-decoration-none">{{$cek->nama}}</a>
                            </div>
                            <div class="">
                                <form action="{{route('custom.destroy', $cek->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"><i class="bi bi-trash-fill text-white"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach --}}
                    {{-- <div class="col-md-12 p-0 mb-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="">
                                <a href="" class="text-decoration-none">p</a>
                            </div>
                            <div class="">
                                <button class="btn btn-danger"><i class="bi bi-trash-fill text-white"></i></button>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <button id="create" class="btn btn-success">membuat karakter</button>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <script>
    var create = '{{route('custom.create')}}';
    var edit = '{{route('custom.index')}}';
    var index = '{{route('custom.index')}}';
    var home = '{{route('indexmenu')}}';
    $(document).ready(function(){
        $('#create').click(function () {
            $('#content').load(create)
        })
        $('#edit').click(function () {
            $('#content').load(edit)
        })
        $('#kembali').click(function () {
            $('#content').load(home)
        })
    })
</script> --}}

<div class="container p-5 rounded bg-white shadow">
    <div class="d-flex mb-3 flex-row-reverse">
        <a href="{{route('custom.create')}}" class="btn btn-success">Tambah Karakter</a>
    </div>
    <table id="example1" class="display my-3 border rounded rounded-3 border-dark" style="width:100%">
        <thead class="gradienbiru text-white">
            <tr>
                <th>No</th>
                {{-- <th>Id</th> --}}
                <th>Nama</th>
                <th>karakter</th>
                <th>date</th>
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
                <td>{{$data->nama}}</td>
                <td class="limittext">{{$data->karakter}}</td>
                <td>{{$data->updated_at->diffForHumans()}}</td>
                {{-- <td><button class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button></td> --}}
                {{-- <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary rounded" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <i class="bi bi-pencil-square text-white"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><a href="{{route('bahasa.edit', $data->id)}}" class="dropdown-item">Play</a></li>
                            <li><a href="{{route('bahasa.edit', $data->id)}}" class="dropdown-item">Ubah</a></li>
                            <li>
                                <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete{{$data->id}}">Hapus</a>
                            </li>
                        </ul>
                    </div>
                </td> --}}
                <td class="d-flex justify-content-between">
                    <a class="btn btn-success" href="{{route('bahasa.edit', $data->id)}}" class="dropdown-item"><i class="bi bi-play-fill"></i> Play</a>
                    <a class="btn btn-primary" href="{{route('bahasa.edit', $data->id)}}" class="dropdown-item"><i class="bi bi-pencil-square"></i> Ubah</a>
                    <a class="btn btn-danger" href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete{{$data->id}}"><i class="bi bi-trash"></i> Hapus</a>
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
                            Apakah anda yakin mau menghapus karakter "{{$data->nama}}"?
                        </h4>
                    </div>
                    <form id="logout-form" action="{{ route('bahasa.destroy', $data->id) }}" method="POST">
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
<script type="text/javascript">
    // $('body').addClass('bg-play');
</script>

@endrole
@endsection