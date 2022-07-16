<div class="flex-row-reverse d-flex">
    <a class="text-right text-dark fw-bold text-decoration-none">Pemrograman</a> /
    <a class="text-right fw-bold text-decoration-none" href="javascript:void(0)" id="select">Select</a> /
    <a id="dashboard" class="text-right fw-bold text-decoration-none" href="javascript:void(0)">Dashboard</a>
</div>
<div class="col-md-12">
    <div class="shadow p-3 mb-5 rounded border border-dark bg-white">
        <div class="card-body">
            <div class="my-5 mx-5">

                {{-- <div class="flex-row-reverse d-flex">
                    <a class="text-right text-dark fw-bold text-decoration-none">Select</a> /
                    <a id="dashboard" class="text-right fw-bold text-decoration-none" href="javascript:void(0)">Dashboard</a>
                </div> --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="mx-auto">
                            <a id="kembali" href="javascript:void(0)" class="text-decoration-none fw-bold">Kembali</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6 class="fw-bold text-center">Pilih</h6>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="d-grid mx-auto">
                        <button id="php" class="fw-bold btn btn-primary block">PHP</button>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="d-grid mx-auto">
                        <a href="{{route('js')}}" class="btn btn-primary fw-bold">JavaScript</a>
                        <button id="js" class="fw-bold btn btn-primary block">JavaScript</button>
                    </div>
                    {{-- <a href="{{route('indexplaycustom')}}">play</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<script>
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
</script>