@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
            <div class="card">
                <div class="card-header">{{ __('Menu Utama') }}</div>
                <div class="card-body">
                    {{-- <div class="row">
                        <div class="col-md-4 border"></div>
                        <div class="col-md-4 border border-primary text-center">Pilih</div>
                        <div class="col-md-4 border"></div>
                    </div> --}}
                    {{-- <h6 class="text-center">Pilih</h6>
                    <div class="row">
                        <div class="d-grid mx-auto">
                            <button id="mulai" class="btn btn-primary block">Mulai</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="d-grid mx-auto">
                            <button id="custom" class="btn btn-primary block">Buat Karakter</button>
                        </div>
                    </div> --}}
                    {{-- <div class="row"></div> --}}
                    <div class="" id="content">
                        <h6 class="text-center">Pilih Bahasa</h6>
                        <div class="row">
                            <div class="d-grid mx-auto">
                                <button id="bahasa" class="btn btn-primary block">Klik</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
