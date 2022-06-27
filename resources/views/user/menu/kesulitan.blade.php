<div class="flex-row-reverse d-flex">
    <a class="text-right text-dark fw-bold text-decoration-none">Select</a> /
    <a id="dashboard" class="text-right fw-bold text-decoration-none" href="javascript:void(0)">Dashboard</a>
</div>
<div class="col-md-12">
    <div class="shadow p-3 mb-5 rounded border border-dark bg-white">
        <div class="card-body">
            <div class="my-5 mx-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mx-auto">
                            <a id="kembali" href="#" class="text-decoration-none fw-bold">Kembali</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6 class="fw-bold text-center">Pilih</h6>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="d-grid mx-auto">
                        {{-- <button id="mudah" class="btn btn-primary block">Mudah</button> --}}
                        <a id="mudah" href="{{route('playmudah')}}" class="btn btn-primary block">Mudah</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="d-grid mx-auto">
                        {{-- <button id="normal" class="btn btn-primary block">Normal</button> --}}
                        <a id="normal" href="{{route('playnormal')}}" class="btn btn-primary block">Normal</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="d-grid mx-auto">
                        <button id="susah" class="btn btn-primary block">Susah</button>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="d-grid mx-auto">
                        <button id="pemrograman" class="btn btn-primary block">Pemrograman</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var indexplay = '{{route('indexplay')}}';
    // var playmudah = '{{route('playmudah')}}';
    // var playnormal = '{{route('playnormal')}}';
    $(document).ready(function(){
        $('#kembali').click(function () {
            $('#content').load(indexplay)
        })
        // $('#mudah').click(function () {
        //     $('#content').load(playmudah)
        // })
        // $('#normal').click(function () {
        //     $('#content').load(playnormal)
        // })
        $('#susah').click(function () {
            $('#content').load('/kesulitan')
        })
        $('#pemrograman').click(function () {
            $('#content').load('/kesulitan/pemrograman')
        })
    })
</script>