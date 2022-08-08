@extends('layouts.master')

@section('content')
@role('admin')
<div class="m-4">
    <div class="d-flex align-items-center">
        <div class="col-md-4 p-0">
            <button class="btn openbtn btn-primary open shadow" id="bukanav" type="button">
                <span id="icbukanav" class="fa fa-bars"></span>
            </button>
        </div>
        <div class="d-flex align-items-center justify-content-center col-md-4 p-3 m-0">
            <h3 class="m-0">Dashboard</h3>
        </div>
        <div class="d-flex align-items-center flex-row-reverse col-md-4 p-0">
            <p class="m-0">Dashboard</p>
        </div>
    </div>
</div>
@endrole
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif
            <div class="card shadow">
                <div class="card-header bg-white fw-bold text-center">{{ __('Verifikasi Alamat Email Kamu') }}</div>

                <div class="p-3">

                    {{ __('Silahkan buka email kamu untuk verifikasi email, masuk di bagian kotak masuk atau spam dan tekan tombol konfirmasi.') }}<br>
                    {{ __('Jika kamu belum menerima email, tekan tombol di bawah') }}
                </div>
                <div class="p-3 d-flex justify-content-center">
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary align-baseline">{{ __('Kirim ulang') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
