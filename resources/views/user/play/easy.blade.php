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
        <h6 class="fw-bold text-center">Easy Mode</h6>
    </div>
    <div>
        <h6 class="fw-bold text-center border">{{$kata}}</h6>
        <div class="d-flex justify-content-between">
            <p>Jumlah kata: {{$jumlahkata}}</p>
            <p>Waktu sisa: </p>
        </div>
    </div>
    <div class="col-md-10">
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
{{-- <script>
    $(document).ready(function(){
        $('#kembali').click(function () {
            if(document.getElementById)
            $('#content').load('/pertanyaanktp')
            elseif(id 2)
            $('#content').load('/pertanyaanktp')
            elseif(id 3)
            $('#content').load('/pertanyaanktp')
            else
        })
    })
</script> --}}
{{-- <script>
    var mengetikkata = CodeMirror.fromTextArea(
        document.getElementById('mengetikkata'),{
            mode: "xml",
            theme: "dracula",
            lineNumbers: true,
            autoCloseTags: true
        }
    )
</script> --}}