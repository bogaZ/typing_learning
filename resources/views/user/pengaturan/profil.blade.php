<form action="{{route('user.update', Auth::user()->id)}}" method="post">
    @csrf
    @method('PATCH')
    {{-- {{$user->id}} --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="d-flex justify-content-between p-3 align-items-center">
                <div></div>
                <h5 class="modal-title fw-bold" id="">Profil</h5>
                <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="m-0">
            <div class="modal-body">
                {{-- <form action="" method="post" class="m-0 p-3"> --}}
                    {{-- <div class="d-flex justify-content-center">
                        <img style="width: 50%" class="p-0" src="{{asset('bagus/admin/img/profil.png')}}" alt="" srcset="">
                    </div> --}}
                    <label for="">Nama</label>
                    <input required type="text" name="nama" class="form-control mb-3" id="" placeholder="nama" value="{{Auth::user()->name}}">
                    <label for="">Email</label>
                    <input required type="email" name="email" class="form-control mb-3" id="" placeholder="email" value="{{Auth::user()->email}}">
                    <label for="">Password</label>
                    <input required type="password" name="password" class="form-control mb-3 @error('password') is-invalid @enderror" placeholder="password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="">Password konfirmasi</label>
                    <input required type="password" name="password" placeholder="konfirmasi password" class="form-control mb-3 @error('passwordkonfirmasi') is-invalid @enderror">
                    @error('passwordkonfirmasi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    {{-- <label for="">Password</label>
                    <input type="text" name="" class="form-control mb-3" id="" value="nama">
                    <label for="">Konfirmasi password baru</label>
                    <input type="text" name="" class="form-control mb-3" id="" value="nama"> --}}
                {{-- </form> --}}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </div>
    </div>
</form>