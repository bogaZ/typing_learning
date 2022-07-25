<div class="flex-row-reverse d-flex kesulitan">
    {{-- <a class="text-right text-dark fw-bold text-decoration-none kesulitan">Kesulitan</a><i class="kesulitan">/</i>
    <a class="text-right fw-bold text-decoration-none kesulitan kembalimulai" href="javascript:void(0)">Select</a><i class="kesulitan">/</i>
    <a class="text-right fw-bold text-decoration-none kesulitan kembali" href="javascript:void(0)">Dashboard</a> --}}
</div>
<div class="col-md-12 kesulitan">
    <div class="shadow p-3 mb-5 rounded bg-white">
        <div class="card-body">
            <div class="my-5 mx-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mx-auto">
                            <a href="javascript:void(0)" class="text-decoration-none fw-bold kembalimulai">Kembali</a>
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
                        @if($statistik >= 150)
                        <a id="normal" href="{{route('playnormal')}}" class="btn btn-primary block">Normal</a>
                        @else
                        <a id="" href="{{route('playnormal')}}" class="btn btn-primary block disabled"><i class="bi bi-lock-fill"></i> Normal</a>
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="d-grid mx-auto">
                        @if($statistik >= 170)
                        <a id="susah" href="{{route('playsusah')}}" class="btn btn-primary block">Susah</a>
                        @else
                        <a id="" class="btn btn-primary block disabled"><i class="bi bi-lock-fill"></i> Susah</a>
                        @endif
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
{{-- <script>
    var indexplay = '{{route('indexplay')}}';
    // var playmudah = '{{route('playmudah')}}';
    var playnormal = '{{route('playnormal')}}';
    var pemrograman = '{{route('pemrograman')}}';
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
            $('#content').load(pemrograman)
        })
    })
</script> --}}