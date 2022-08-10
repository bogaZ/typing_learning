<div class="modal fade" id="lock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="p-3 border-bottom text-center d-flex justify-content-between align-items-center">
                <div></div>
                <h3 class="fw-bold m-0 d-flex justify-content-center" id="exampleModalLabel">&nbsp;&nbsp;&nbsp;Pemberitahuan</h3>
                <button type="button" class="btn-close m-0 d-flex justify-content-end" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center row">
                <i class="bi bi-exclamation-circle" style="font-size: 50px"></i>
                <h4 class="m-0 p-3">
                    Untuk membuka tombol yang terkunci, kamu harus mendaftar akun dulu
                </h4>
            </div>
            <div class="m-3 d-flex justify-content-center">
                {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button> --}}
                <a href="{{ route('register') }}" class="btn btn-success py-2 px-4 ms-3">Mendaftar Akun</a>
            </div>
        </div>
    </div>
</div>