<div class="row">
    <div class="d-grid mx-auto">
        <button id="kembali" class="btn btn-danger block">Kembali</button>
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
        <button id="normal" class="btn btn-primary block">Normal</button>
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
    $(document).ready(function(){
        $('#kembali').click(function () {
            $('#content').load('/menuplay')
        })
        $('#mudah').click(function () {
            $('#content').load('/mudah/play')
        })
        $('#normal').click(function () {
            $('#content').load('/playcustom')
        })
        $('#susah').click(function () {
            $('#content').load('/kesulitan')
        })
        $('#pemrograman').click(function () {
            $('#content').load('/kesulitan/pemrograman')
        })
    })
</script>