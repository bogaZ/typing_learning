@role('user')
<div class="flex-row-reverse d-flex">
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
                    <h5 class="text-center fw-bold">Karakter belum dibuat</h5>
                    @foreach ($namakarakter as $cek)
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
                    @endforeach
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
                    <button id="create" class="btn btn-success">membuat karakter</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
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
</script>
@endrole