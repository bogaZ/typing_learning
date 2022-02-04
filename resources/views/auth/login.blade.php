@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="d-flex justify-content-center mt-4">
                            <div class="border d-flex justify-content-center align-items-center border-dark" style="width: 75px; height: 75px; border-radius: 50%; border-color: gray;"><i class="bi bi-person-fill fs-1" style="transform: rotateY(180deg)"></i></div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <h4 class="fw-bold">Masuk</h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p>Belum memiliki akun? daftar <a href="{{ route('register') }}" class="text-decoration-none">disini</a></p>
                        </div>
                        <div class="form-group mx-5 justify-content-center">
                            <div class="">
                                <input id="email" type="email" placeholder="email" class="text-center form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mx-5 justify-content-center">
                            <div class="">
                                <input id="password" type="password" placeholder="kata sandi" class="text-center form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mx-5">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-md-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Ingatkan saya') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5 text-right">
                                    @if (Route::has('password.request'))
                                        <a class="p-0 text-decoration-none btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Lupa kata sandi?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group mx-5 justify-content-center">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Masuk') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
