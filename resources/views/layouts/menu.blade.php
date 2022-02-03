<div class="" id="content">
    <h6 class="text-center">Pilih</h6>
    <div class="row">
        <div class="d-grid mx-auto">
            <button id="mulai" class="btn btn-primary block">Mulai</button>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="d-grid mx-auto">
            <button id="custom" class="btn btn-primary block">Buat Karakter</button>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#mulai').click(function () {
            $('#content').load('/menuplay')
            var pilih = $('#mulai').hide()
        })
        $('#custom').click(function () {
            $('#content').load('/menucustom')
            var pilih = $('#custom').hide()
        })
    })
</script>