<div class="row">
    <div class="d-grid mx-auto">
        <button id="kembali" class="btn btn-danger block">Kembali</button>
    </div>
</div>
<br>
<div class="row">
    <div class="d-grid mx-auto">
        <button id="mulai" class="btn btn-primary block">Mudah</button>
    </div>
</div>
<br>
<div class="row">
    <div class="d-grid mx-auto">
        <button id="custom" class="btn btn-primary block">Normal</button>
    </div>
</div>
<br>
<div class="row">
    <div class="d-grid mx-auto">
        <button id="mulai" class="btn btn-primary block">Susah</button>
    </div>
</div>
<br>
<div class="row">
    <div class="d-grid mx-auto">
        <button id="custom" class="btn btn-primary block">Pemrograman</button>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#kembali').click(function () {
            $('#content').load('/menuplay')
        })
        $('#mulai').click(function () {
            $('#content').load('/kesulitan')
        })
        $('#custom').click(function () {
            $('#content').load('/playcustom')
        })
    })
</script>