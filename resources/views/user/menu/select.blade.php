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
        <button id="mulai" class="fw-bold btn btn-primary block">Mulai Karakter Asal</button>
    </div>
</div>
<br>
<div class="row">
    <div class="d-grid mx-auto">
        <button id="custom" class="fw-bold btn btn-primary block">Mulai Karakter Sendiri</button>
    </div>
    {{-- <a href="{{route('indexplaycustom')}}">play</a> --}}
</div>
<script>
    var home = '{{route('indexmenu')}}';
    var indexplaykesulitan = '{{route('tingkatkesulitan')}}';
    var indexplaycustom = '{{route('indexplaycustom')}}';
    $(document).ready(function(){
        $('#kembali').click(function () {
            $('#content').load(home)
        })
        $('#mulai').click(function () {
            $('#content').load(indexplaykesulitan)
        })
        $('#custom').click(function () {
            $('#content').load(indexplaycustom)
        })
    })
</script>