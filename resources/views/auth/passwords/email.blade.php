@extends('layouts.master')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4 shadow border-dark">
                <div class="text-center fw-bold h3 p-3">{{ __('Reset Password') }}</div>

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group d-flex flex-column">
                            <label for="email" class="col-md-12 px-3 col-form-label text-center">{{ __('Email') }}</label>

                            <div class="col-md-12 px-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="email@example.com" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group d-flex">
                            <div class="col-md-12 px-3">
                                <button type="submit" class="btn btn-primary col-md-12">
                                    {{ __('Submit') }}
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
