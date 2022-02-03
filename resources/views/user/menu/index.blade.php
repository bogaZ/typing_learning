<div class="row">
    <div class="d-grid mx-auto">
        <button id="kembali" class="btn btn-danger block">Kembali</button>
    </div>
</div>
<br>
<div class="row">
    <div class="d-grid mx-auto">
        <button id="mulai" class="btn btn-primary block">Mulai Karakter Asal</button>
    </div>
</div>
<br>
<div class="row">
    <div class="d-grid mx-auto">
        <button id="custom" class="btn btn-primary block">Mulai Karakter Sendiri</button>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#kembali').click(function () {
            $('#content').load('/menu')
        })
        $('#mulai').click(function () {
            $('#content').load('/home')
        })
        // $('#custom').click(function () {
        //     $('#content').load('/menucustom')
        //     var pilih = $('#custom').hide()
        // })
    })
</script>