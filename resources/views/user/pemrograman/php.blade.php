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

{{-- <div class="row">
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
</div> --}}

<div class="row">
    {{-- <div>
        <h6 class="fw-bold text-center">{{$kata}}</h6>
        <p>jumlah kata: {{$jumlahkata}}</p>
    </div> --}}
    <div class="col-md-4">
        <div class="mx-auto">
            <a id="kembali" href="#" class="text-decoration-none fw-bold">Kembali</a>
        </div>
    </div>
    <div class="col-md-4">
        <h6 class="fw-bold text-center">PHP Mode</h6>
    </div>
    <div>
        <h6 class="fw-bold text-center border">"echo 'mengetik bahasa pemrograman';"</h6>
        <div class="d-flex justify-content-between">
            <p>Jumlah kata: </p>
            <p>Waktu sisa: </p>
        </div>
    </div>
    <div class="col-md-10 border">
        <textarea id="mengetikkata" class="form-control" placeholder="ketik disini....." style="overflow: hidden; resize: none; height: 150px"></textarea>
    </div>
    <div class="col-md-2 d-grid">
        <span>Score: </span>
        {{-- <button type="submit" class="btn btn-primary">simpan</button>
        <button type="submit" class="btn btn-primary my-3">reset</button>
        <button type="submit" class="btn btn-danger">hapus</button> --}}
    </div>
</div>
{{-- <script>
    $('textarea').maxlength({
        alwaysShow: true,
        threshold: 10,
        warningClass: "label label-success",
        limitReachedClass: "label label-danger",
        separator: ' out of ',
        preText: 'You write ',
        postText: ' chars.',
        validate: true
     });
</script> --}}
<script>
    $(document).ready(function(){
        $('#kembali').click(function () {
            $('#content').load('/menuplay')
        })
    })
</script>
<script>
    var mengetikkata = CodeMirror.fromTextArea(
        document.getElementById('mengetikkata'),{
            mode: "xml",
            theme: "dracula",
            lineNumbers: true,
            autoCloseTags: true
        }
    )
</script>