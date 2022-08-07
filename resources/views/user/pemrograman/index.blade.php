<div class="col-md-12 pemrograman d-none">
    <h3 class="fw-bold text-center m-3">Menu Bahasa Pemrograman Mengetik</h3>
    <div class="d-flex align-items-center justify-content-end">
        <a href="javascript:void(0)" title="bantuan" class="fw-bold text-decoration-none">Bantuan?</a>
    </div>
</div>
{{-- ini halaman{{$nama}} --}}
<div class="col-md-12 pemrograman d-none">
    <div class="shadow p-3 mb-5 rounded bg-white">
        <div class="card-body">
            <div class="my-5 mx-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mx-auto">
                            <a href="javascript:void(0)" class="text-decoration-none fw-bold kembalikesulitan" id="kembalipemrograman">Kembali</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6 class="fw-bold text-center">Pilih</h6>
                    </div>
                </div>
                
                @foreach($datapemrograman as $data)
                <br>
                <div class="row">
                    <div class="d-grid mx-auto">
                        <a href="{{route('playpemrograman', $data->bahasa)}}" class="btn btn-primary fw-bold">{{$data->bahasa}}</a>
                    </div>
                </div>
                @endforeach

                {{-- <br>
                <div class="row">
                    <div class="d-grid mx-auto">
                        <a href="{{route('js')}}" class="btn btn-primary fw-bold">JavaScript</a>
                    </div>
                </div> --}}


                {{-- @foreach($datapemrograman as $data) --}}
                {{-- {{$data->bahasa}} --}}
                {{-- <a href="{{route('playpemrograman', $data->bahasa)}}">{{$data->bahasa}}</a>
                @endforeach --}}
            </div>
        </div>
    </div>
</div>
{{-- <script>
    var indexplay = '{{route('indexplay')}}';
    var select = '{{route('indexplay')}}';
    var php = '{{route('php')}}';
    $(document).ready(function(){
        $('#kembali').click(function () {
            $('#content').load(indexplay)
        })
        $('#select').click(function () {
            $('#content').load(indexplay)
        })
        $('#php').click(function () {
            $('#content').load(php)
        })
        $('#js').click(function () {
            $('#content').load('/kesulitan/pemrograman/js')
        })
    })
</script> --}}