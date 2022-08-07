<div class="col-md-12 menu d-none">
    <h3 class="m-0 text-dark fw-bold text-center m-3 text-decoration-none">Menu Utama</h6>
    <div class="d-flex align-items-center justify-content-end">
        <a href="javascript:void(0)" title="bantuan" class="fw-bold text-decoration-none" data-bs-toggle="modal" data-bs-target="#bantuan">Bantuan?</a>
    </div>
</div>
<div class="col-md-12 menu">
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
                            {{-- <button id="custom" class="btn btn-primary block fw-bold">Buat Karakter</button> --}}
                            <a href="{{route('custom.index')}}" class="btn btn-primary fw-bold">Custom</a>
                        </div>
                    </div>
                    {{-- <br>
                    <div class="row">
                        <div class="d-grid mx-auto">
                            <a href="{{route('statistik.index')}}" class="btn btn-primary fw-bold">Statistik</a>
                        </div>
                    </div> --}}
                </div>
                {{-- <br>
                <div class="d-flex justify-content-between">
                    <div class="p-0">
                        <button id="settingmodal" class="btn btn-secondary block" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-gear-fill"></i> Pengaturan profil</button>
                    </div>
                    <div class="p-0">
                        <button id="gantibahasakarakter" class="btn btn-secondary block" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"><i class="bi bi-globe2"></i> Ganti Bahasa mengetik</button>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>