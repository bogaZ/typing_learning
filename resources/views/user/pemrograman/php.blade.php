<div class="row bg-white p-5 rounded">
    <div class="col-md-4 p-0">
        <div class="mx-auto">
            <a id="kembali" href="#" class="text-decoration-none fw-bold">Kembali</a>
        </div>
    </div>
    <div class="col-md-4">
        <p class="fw-bold text-center">PHP Mode</p>
    </div>
    <div class="p-0">
        <div class="typing-text">
            <p class="bg-white shadow border-none rounded py-4 px-3">"echo 'mengetik bahasa pemrograman';"</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Jumlah kata: 0</p>
            <p>Waktu sisa: 0</p>
        </div>
    </div>
    <div class="col-sm-12 p-0 border-none">
        <textarea id="mengetikkata" class="form-control" placeholder="ketik disini....." style="overflow: hidden; resize: none; height: 150px"></textarea>
    </div>
    <div class="col-sm-12 d-grid p-0">
        <div class=" pm">
            <span class="text-white p-3">Score: </span>
        </div>
    </div>
</div>
<style>
    .pm{
        background-color: blue;
    }
</style>
<script>
    var pemrograman = '{{route('pemrograman')}}';
    $(document).ready(function(){
        $('#kembali').click(function () {
            $('#content').load(pemrograman)
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