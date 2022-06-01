<div class="row">
    <div class="d-grid mx-auto">
        <button id="kembali" class="btn btn-danger block">Kembali</button>
    </div>
</div>
<br>
<div class="row">
    <div class="d-grid mx-auto">
        <button id="PHP" class="btn btn-primary block">PHP</button>
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

        // $('#mudah').click(function () {
        //     $('#content').load('/mudah/play')
        // })
        // $('#normal').click(function () {
        //     $('#content').load('/playcustom')
        // })
        // $('#susah').click(function () {
        //     $('#content').load('/kesulitan')
        // })
        // $('#pemrograman').click(function () {
        //     $('#content').load('/kesulitan/pemrograman')
        // })
    })
</script>