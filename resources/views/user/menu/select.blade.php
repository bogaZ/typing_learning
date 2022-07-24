{{-- <div class="col-md-12">
    <a class="text-right flex-row-reverse d-flex text-dark fw-bold text-decoration-none">Dashboard</a>
</div> --}}
<div class="flex-row-reverse d-flex mulai">
    <a class="text-right text-dark fw-bold text-decoration-none mulai">Select</a> <i class="mulai">/</i>
    <a class="text-right fw-bold text-decoration-none dashboard mulai kembali" href="javascript:void(0)">Dashboard</a>
</div>
<div class="col-md-12 mulai">
    <div class="shadow p-3 mb-5 rounded border border-dark bg-white">
        <div class="card-body">
            <div class="my-5 mx-5">

                {{-- <div class="flex-row-reverse d-flex">
                    <a class="text-right text-dark fw-bold text-decoration-none">Select</a> /
                    <a id="dashboard" class="text-right fw-bold text-decoration-none" href="javascript:void(0)">Dashboard</a>
                </div> --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="mx-auto">
                            <a href="javascript:void(0)" class="text-decoration-none fw-bold kembali">Kembali</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6 class="fw-bold text-center">Pilih</h6>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="d-grid mx-auto">
                        <button id="kesulitan" class="fw-bold btn btn-primary block">Mulai Karakter Asal</button>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="d-grid mx-auto">
                        <button id="custom" class="fw-bold btn btn-primary block">Mulai Karakter Sendiri</button>
                    </div>
                    {{-- <a href="{{route('indexplaycustom')}}">play</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
    var home = '{{route('indexmenu')}}';
    var indexplaykesulitan = '{{route('tingkatkesulitan')}}';
    var indexplaycustom = '{{route('indexplaycustom')}}';
    $(document).ready(function(){
        $('#kembali').click(function () {
            $('#content').load(home)
        })
        $('#dashboard').click(function () {
            $('#content').load(home)
        })
        $('#mulai').click(function () {
            $('#content').load(indexplaykesulitan)
        })
        $('#custom').click(function () {
            $('#content').load(indexplaycustom)
        })
    })
</script> --}}