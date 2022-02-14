<div class="row">
    <h5 class="text-center fw-bold">Karakter belum dibuat</h5>
    <div class="col-md-12 p-0 my-3">
        <div class="d-flex align-items-center justify-content-between">
            <div class="">
                <a href="" class="text-decoration-none">p</a>
            </div>
            <div class="">
                <button class="btn btn-danger"><i class="bi bi-trash-fill text-white"></i></button>
            </div>
        </div>
    </div>
    <button id="create" class="btn btn-success">membuat karakter</button>
</div>
<script>
    $(document).ready(function(){
        $('#create').click(function () {
            $('#content').load('/menucustom/create')
        })
        $('#edit').click(function () {
            $('#content').load('/menucustom')
        })
    })
</script>