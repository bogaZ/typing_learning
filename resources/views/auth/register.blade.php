@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="d-flex justify-content-center mt-4">
                            <div class="border d-flex justify-content-center align-items-center border-dark" style="width: 75px; height: 75px; border-radius: 50%; border-color: gray;"><i class="bi bi-person-plus-fill fs-1" style="transform: rotateY(180deg)"></i></div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <h4 class="fw-bold">Daftar</h4>
                        </div>
                        <div class="form-group mx-5 justify-content-center">
                            <div class="">
                                <input id="name" type="text" placeholder="nama" class="text-center form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mx-5 justify-content-center">
                            <div class="">
                                <input id="email" type="email" placeholder="email" class="text-center form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mx-5 justify-content-center">
                            <div class="">
                                <select name="bahasa" id="bahasa" class="text-center form-control">
                                    <option selected hidden disabled>pilih bahasa</option>
                                    <option value="2" class="text-center">Indonesia</option>
                                    <option value="3" class="text-center">Inggris</option>
                                </select>

                                @error('bahasa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mx-5 justify-content-center">
                            <div class="">
                                <input id="password" type="password" placeholder="kata sandi" class="text-center form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mx-5 justify-content-center">
                            <div class="">
                                <input id="password-confirm" type="password" placeholder="konfirmasi kata sandi" class="text-center form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group mx-5 justify-content-center">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Mendaftar') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group mx-5 justify-content-center">
                            <p class="text-center">Sudah memiliki akun? <a href="{{ route('login') }}" class="text-decoration-none">masuk</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
