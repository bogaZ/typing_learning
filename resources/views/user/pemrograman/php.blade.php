{{-- <div class="row">
    <div class="d-grid mx-auto">
        <button id="kembali" class="btn btn-danger block">Kembali</button>
    </div>
</div>
<br>
<div class="row">
    <div class="d-grid mx-auto">
        <button id="PHP" class="btn btn-primary block">Ini PHP</button>
    </div>
</div>
<br>
<div class="row">
    <div class="d-grid mx-auto">
        <button id="JS" class="btn btn-primary block">JavaScript</button>
    </div>
</div>
<br>
<script>
    $(document).ready(function(){
        $('#kembali').click(function () {
            $('#content').load('/menuplay')
        })
        $('#PHP').click(function () {
            $('#content').load('/kesulitan/pemrograman/php')
        })
        $('#JS').click(function () {
            $('#content').load('/kesulitan/pemrograman/js')
        })
    })
</script> --}}

<div class="row">
    <div class="my-3 mx-1">
        <a id="kembali" href="#" class="text-decoration-none fw-bold">Kembali</a>
    </div>
    <div>
        <h6 class="fw-bold text-center">{{$kata}}</h6>
        <p>jumlah kata: {{$jumlahkata}}</p>
    </div>
    <div class="col-md-10">
        <textarea class="form-control" placeholder="ketik disini....." style="overflow: hidden; resize: none; height: 150px"></textarea>
    </div>
    <div class="col-md-2 d-grid">
    </div>
</div>