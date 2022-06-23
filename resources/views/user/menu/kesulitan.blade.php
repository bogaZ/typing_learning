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
        <button id="mudah" class="btn btn-primary block">Mudah</button>
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
<script>
    var indexplay = '{{route('indexplay')}}';
    var playmudah = '{{route('playmudah')}}';
    var playnormal = '{{route('playnormal')}}';
    $(document).ready(function(){
        $('#kembali').click(function () {
            $('#content').load(indexplay)
        })
        $('#mudah').click(function () {
            $('#content').load(playmudah)
        })
        $('#normal').click(function () {
            $('#content').load(playnormal)
        })
        $('#susah').click(function () {
            $('#content').load('/kesulitan')
        })
        $('#pemrograman').click(function () {
            $('#content').load('/kesulitan/pemrograman')
        })
    })
</script>