<div class="row">
    <div class="col-md-6">
        <div class="mx-auto">
            <a id="kembali" href="#" class="fw-bold">Kembali</a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button id="reload" class="btn btn-danger block"><i class="bi bi-arrow-clockwise"></i></button>
        </div>
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
            $('#content').load('/kesulitan')
        })
        $('#custom').click(function () {
            $('#content').load('/custom')
        })
        // $('#custom').click(function () {
        //     $('#content').load('/menucustom')
        //     var pilih = $('#custom').hide()
        // })
    })
</script>
@include('user.ubahbahasa.reload')