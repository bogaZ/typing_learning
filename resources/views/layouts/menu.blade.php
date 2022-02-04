<div class="" id="content">
    <h6 class="text-center fw-bold">Pilih</h6>
    <br>
    <div class="row">
        <div class="d-grid mx-auto">
            <button id="mulai" class="btn btn-primary block fw-bold">Mulai</button>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="d-grid mx-auto">
            <button id="custom" class="btn btn-primary block fw-bold">Buat Karakter</button>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="d-grid col-md-6 justify-content-md-start">
        <button id="setting" class="btn btn-secondary block"><i class="bi bi-gear-fill"></i></button>
    </div>
    <div class="d-grid col-md-6 justify-content-md-end">
        <button id="reload" class="btn btn-secondary block"><i class="bi bi-arrow-clockwise"></i></button>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#mulai').click(function () {
            $('#content').load('/menuplay')
        })
        $('#custom').click(function () {
            $('#content').load('/menucustom')
        })
    })
</script>
@include('user.ubahbahasa.reload')