@extends('layouts.master')

@section('content')
@role('user')
<div class="pt-3">
    <h3 class="text-center m-5 fw-bold">Menu Custom</h3>
</div>
<div class="container p-5 rounded bg-white shadow col-md-10">
    @if (session('sukses'))
        <div class="alert alert-success" role="alert">
            {{ session('sukses') }}
        </div>
    @endif
    <div class="d-flex mb-3 flex-row-reverse">
        <a href="{{route('custom.create')}}" class="btn btn-success">Tambah Karakter</a>
    </div>
    <table id="example1" class="display my-3 border rounded rounded-3 border-dark" style="width:100%">
        <thead class="gradienbiru text-white">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Karakter</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="gradienbiru2 text-dark">
            @foreach($alldata as $i=>$data)
            <tr>
                <td>{{++$i}}.</td>
                <td>{{$data->nama}}</td>
                <td class="limittext">{{$data->karakter}}</td>
                <td>{{$data->updated_at->diffForHumans()}}</td>
                <td class="d-flex justify-content-between">
                    <a class="btn btn-success" href="{{route('custom.show', $data->id)}}" class="dropdown-item"><i class="bi bi-play-fill"></i> Play</a>
                    <a class="btn btn-primary" href="{{route('custom.edit', $data->id)}}" class="dropdown-item"><i class="bi bi-pencil-square"></i> Ubah</a>
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
                    <form id="logout-form" action="{{ route('custom.destroy', $data->id) }}" method="POST">
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
{{-- <script type="Text/Javascript">
    $(document).ready(function () {
    $('#example1_wrapper').DataTable({
        scrollX: true,
    });
});
</script> --}}

@endrole
@endsection