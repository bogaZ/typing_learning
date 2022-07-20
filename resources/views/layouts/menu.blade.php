{{-- <div class="" id="content">
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
    var indexplay = '{{route('indexplay')}}';
    var indexcustom = '{{route('custom.index')}}';
    $(document).ready(function(){
        $('#mulai').click(function () {
            $('#content').load(indexplay)
        })
        $('#custom').click(function () {
            $('#content').load(indexcustom)
        })
    })
</script> --}}
{{-- @include('user.ubahbahasa.reload') --}}

<div class="col-md-12">
    <a class="text-right flex-row-reverse d-flex text-dark fw-bold text-decoration-none">Dashboard</a>
</div>
<div class="col-md-12">
    <div class="shadow p-3 mb-5 rounded border-none bg-white">
        <div class="card-body">
            <div class="my-5 mx-5">
                <div class="">
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
                    <br>
                    <div class="row">
                        <div class="d-grid mx-auto">
                            <a href="{{route('statistik.index')}}" class="btn btn-primary fw-bold">Statistik</a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-between">
                    <div class="p-0">
                        <button id="settingmodal" class="btn btn-secondary block"><i class="bi bi-gear-fill"></i></button>
                    </div>
                    <div class="p-0">
                        <button id="reload" class="btn btn-secondary block"><i class="bi bi-arrow-clockwise"></i></button>
                    </div>
                </div>
                <script type="text/javaScript">
                    var indexcustom = '{{route('custom.index')}}';
                    var indexplay = '{{route('indexplay')}}';
                    // var indexstatistik = '{{route('statistik.index')}}';
                    $(document).ready(function(){
                        $('#mulai').click(function () {
                            $('#content').load(indexplay)
                        })
                        $('#custom').click(function () {
                            $('#content').load(indexcustom)
                        })
                        // $('#statistik').click(function () {
                        //     $('#content').load(indexstatistik)
                        // })
                        $('#reload').click(function () {
                            location.reload(true)
                        })
                    })
                </script>
            </div>
        </div>
    </div>
</div>