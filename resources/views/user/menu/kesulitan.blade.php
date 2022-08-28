<div class="col-md-12 kesulitan d-none">
    <h3 class="fw-bold text-center m-3" title="Halaman menu">Tingkat Kesulitan</h6>
    <div class="d-flex align-items-center justify-content-end">
        <a href="javascript:void(0)" title="bantuan" class="fw-bold text-decoration-none" data-bs-toggle="modal" data-bs-target="#bantuan">Bantuan?</a>
    </div>
</div>
<div class="col-md-12 kesulitan d-none">
    <div class="shadow p-3 mb-5 rounded bg-white">
        <div class="card-body">
            <div class="my-5 mx-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mx-auto">
                            <a href="javascript:void(0)" class="text-decoration-none fw-bold kembalimulai">Kembali</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6 class="fw-bold text-center">Pilih</h6>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="d-grid mx-auto">
                        <a id="mudah" href="{{route('playmudah')}}" class="btn btn-primary block fw-bold">Mudah</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="d-grid mx-auto">
                        @if($mudahstatistik >= $mudahTarget)
                        <a id="normal" href="{{route('playnormal')}}" class="btn btn-primary block fw-bold">Normal</a>
                        @else
                        <a id="" class="btn btn-primary block fw-bold" type="button" data-bs-toggle="modal" data-bs-target="#normalalert"><i class="bi bi-lock-fill"></i> Normal</a>
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="d-grid mx-auto">
                        @if($normalstatistik >= $normalTarget)
                        <a id="susah" href="{{route('playsusah')}}" class="btn btn-primary block fw-bold">Susah</a>
                        @else
                        <a id="" class="btn btn-primary block fw-bold" type="button" data-bs-toggle="modal" data-bs-target="#susahalert"><i class="bi bi-lock-fill"></i> Susah</a>
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="d-grid mx-auto">
                        <button id="pemrograman" class="btn btn-primary block fw-bold">Pemrograman</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>