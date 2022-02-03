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
            <div class="shadow p-3 mb-5 rounded border border-dark bg-white">
                <div class="card-body">
                    <div class="my-5" id="content">
                        <h6 class="text-center fw-bold">Pilih Bahasa</h6>
                        <div class="row mx-5">
                            <div class="d-grid mx-auto">
                                <button id="bahasaindonesia" class="btn btn-primary block fw-bold">bahasa indonesia</button>
                            </div>
                        </div>
                        <br>
                        <div class="row mx-5">
                            <div class="d-grid mx-auto">
                                <button id="bahasainggris" class="btn btn-primary block fw-bold">bahasa inggris</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
