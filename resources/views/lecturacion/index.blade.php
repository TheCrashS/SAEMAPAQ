@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lecturacion') }}</div>

                <div class="card-body">
                    <form method="GET" action="{{ route('lecturacion.index')}} ">
                        @csrf

                        <div class="form-group row">
                            <label for="consumo" class="col-md-4 col-form-label text-md-right">{{ __('consumo') }}</label>

                            <div class="col-md-6">
                                <input id="consumo" type="number" class="form-control " name="consumo"  required autocomplete="consumo" autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Lecturacion') }}
                                </button>


                            </div>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('lecturacion.index') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="consumo" class="col-md-4 col-form-label text-md-right">{{ __('consumo') }}</label>

                            <div class="col-md-6">
                                <input id="consumo" type="number" class="form-control  " name="consumo"  required autocomplete="consumo" autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Lecturacion') }}
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
