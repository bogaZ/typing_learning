<div class="modal fade" id="bantuan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
        <div class="d-flex justify-content-between p-3 align-items-center">
            <h5 class="modal-title fw-bold" id="">Menu Bantuan</h5>
            <div></div>
            <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <hr class="m-0">
        <div class="modal-body">
            <div class="p-3">
                <h5 class="fw-bold text-center">Navigasi</h5>
                <h6 class="fw-bold">Menu Pilihan</h6>
                <div class="mb-3">
                    <p class="m-0">1. Tombol Profil : Kamu menuju ke halaman profil</p>
                    <p class="m-0">2. Tombol Statistik : Kamu menuju ke halaman statistik</p>
                    <p class="m-0">3. Tombol Pengaturan : Kamu menuju ke halaman pengaturan</p>
                    <p class="m-0">4. Tombol Keluar : Kamu keluar dari akun yang kamu akses saat ini</p>
                </div>
                <h5 class="fw-bold text-center">Memilih Menu Konten</h5>
                <h6 class="fw-bold">Menu Utama</h6>
                <div class="mb-3">
                    <p class="m-0">1. Tombol Play : Kamu menuju ke menu tingkat kesulitan</p>
                    <p class="m-0">2. Tombol Custom : Kamu menuju ke menu custom</p>
                </div>
                <h6 class="fw-bold">Menu Kesulitan</h6>
                <div class="mb-3">
                    <p class="m-0">1. Tombol Mudah : Kamu akan mengetik pada tingkat kesulitan mudah</p>
                    <p class="m-0">2. Tombol Normal : Kamu akan mengetik pada tingkat kesulitan normal</p>
                    <p class="m-0">3. Tombol Susah : Kamu akan mengetik pada tingkat kesulitan susah</p>
                    <p class="m-0">4. Tombol Pemrograman : Kamu akan mengetik pada tingkat kesulitan pemrograman</p>
                </div>
                <h6 class="fw-bold">Menu Custom</h6>
                <div class="mb-3">
                    <p class="m-0">1. Tombol Tambah Karakter : Kamu akan diarahkan ke menu membuat karakter</p>
                    <p class="m-0">2. Tombol Play : Kamu akan memulai mengetik sesuai karakter yang kamu pilih</p>
                    <p class="m-0">3. Tombol Ubah : Kamu akan mengubah karakter yang kamu pilih</p>
                    <p class="m-0">4. Tombol Hapus : Kamu akan menghapus karakter yang kamu pilih</p>
                </div>
                <h6 class="fw-bold">Menu Pemrograman</h6>
                <div class="mb-3">
                    @foreach($datapemrograman as $i => $data)
                    <p class="m-0">{{++$i}}. Tombol {{$data->bahasa}} : Kamu akan memainkan bahasa pemrograman {{$data->bahasa}}</p>
                    @endforeach
                </div>
                <h5 class="fw-bold text-center">Membuka Fitur Terkunci</h5>
                <h6 class="fw-bold">Syarat</h6>
                <div class="mb-3">
                    @foreach($alllevel as $level)
                    @if($level->level == 3)
                    @foreach($type as $i => $alltype)
                    @if($alltype->name == 'normal')
                    <p class="m-0">1. Membuka Tombol Normal : Kamu harus mencapai level 3 atau mendapatkan minimal score {{$level->score}} kpm dari tingkat kesulitan mudah</p>
                    @elseif($alltype->name == 'susah')
                    <p class="m-0">2. Membuka Tombol Susah : Kamu harus mencapai level 3 atau mendapatkan minimal score {{$level->score}} kpm dari tingkat kesulitan normal</p>
                    @endif
                    @endforeach
                    @endif
                    @endforeach
                    {{-- <p class="m-0">2. Membuka Tombol Susah : Kamu harus mencapai level 3 atau mendapatkan minimal score 60 kpm dari tingkat kesulitan normal</p> --}}
                </div>
                <h5 class="fw-bold text-center">Mengetik Karakter</h5>
                <h6 class="fw-bold">Cara Bermain</h6>
                <div class="mb-3">
                    <p class="m-0">Pengguna cukup menekan tombol sesuai karakter yang ditampilkan pada web. Jika sesuai, maka warna pada huruf akan berubah menjadi warna hijau. Jika tidak sesuai, maka warna pada huruf akan berubah menjadi warna merah</p>
                </div>
                <h6 class="fw-bold">Tingkat Kesulitan</h6>
                <div class="mb-3">
                    <p class="m-0">1. Mudah : Huruf yang ditampilkan hanya hanya huruf kecil dan besar</p>
                    <p class="m-0">2. Normal : Huruf yang ditampilkan memiliki tambahan sedikit tanda simbol</p>
                    <p class="m-0">3. Susah : Huruf yang ditampilkan mencangkup seluruhnya termasuk simbol</p>
                    <p class="m-0">4. Pemrograman : Huruf yang yang ditampilkan memiliki format bahasa pemrograman</p>
                </div>
                <h6 class="fw-bold">Level</h6>
                <div class="mb-3">
                    <p class="m-0">Level merupakan pencapaian yang kamu lakukan selama mengetik. Pencapaian ini berdasarkan nilai skor karakter per menit (Kpm).</p>
                    @foreach($alllevel as $i => $level)
                    <p class="m-0">{{++$i}}. Level {{$level->level}} : Pencapaian kamu saat ini ketika skor mengetiknya mencapai {{$level->score}} kpm</p>
                    @endforeach
                </div>
                <h6 class="fw-bold">Skor mengetik</h6>
                <div class="mb-3">
                    <p>Skor karakter pe menit (Kpm) diperoleh dari perhitungan seluruh karakter yang benar dengan waktu mengetik yang kamu selesaikan (detik)</p>
                </div>
                <h6 class="fw-bold">Reset Karakter</h6>
                <div class="mb-3">
                    <p class="m-0">Tombol Reset mengetik berfungsi mengatur ulang ke tampilan awal sebelum mengetik. Semua nilai waktu, skor, benar, dan salah kembali ke nilai awal</p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        {{-- <button type="submit" class="btn btn-primary">Simpan</button> --}}
        </div>
    </div>
    </div>
</div>