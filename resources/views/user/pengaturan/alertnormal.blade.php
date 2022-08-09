{{-- {{$statistik->where('kesulitan', 'normal')->max('speed_typing')}} --}}
<div class="modal fade" id="normalalert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="p-3 border-bottom text-center d-flex justify-content-center align-items-center">
                <h3 class="fw-bold text-center m-0" id="exampleModalLabel">Peringatan</h3>
            </div>
            <div class="modal-body text-center row">
                <i class="bi bi-exclamation-circle" style="font-size: 50px"></i>
                <h4 class="m-0 p-3">
                    Level kesulitan mudah kamu belum mencapai level 3 atau belum mencapai skor {{$level3}} kpm
                </h4>
            </div>
            <div class="m-3 d-flex justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                {{-- <button type="submit" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>