@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header h5 font-weight-bold">{{ __('Parametros - Categorias ') }}</div>

                <div class="card-body">
                    @include('flash::message')
                    <div class="row justify-content-between">
                        <div class="col col-sm-4">
                            <a class="btn btn-outline-secondary" href="{{ route('parametro.index') }}"><i class="fas fa-arrow-left fa-lg fa-fw"></i>&nbsp;{{ __('Back') }}</a>
                        </div>
                    </div>
                    <hr>
                    <form method="GET" action="{{ route('parametro.index' ) }}">
                        @method('GET')
                        @csrf

                        <div class="form-group row">
                            <label for="UFV" class="col-md-4 col-form-label text-md-right">{{ __('UFV') }}</label>
                            <div class="col-md-6">
                                <input id="UFV" type="number" class="form-control{{ $errors->has('UFV') ? ' is-invalid' : '' }}" name="UFV" value="{{  $param->UFV }}"  required autofocus>
                                @if ($errors->has('UFV'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('UFV') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="domiciliar" class="col-md-4 col-form-label text-md-right">{{ __('Tarifa domiciliar por cada 1000 L') }}</label>

                            <div class="col-md-6">
                                <input id="domiciliar" type="number" class="form-control{{ $errors->has('domiciliar') ? ' is-invalid' : '' }}" name="domiciliar" value="{{  $param->domiciliar }}"  required autofocus>
                                @if ($errors->has('domiciliar'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('domiciliar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="comercial" class="col-md-4 col-form-label text-md-right">{{ __('Tarifa comercial por cada 1000 L') }}</label>

                            <div class="col-md-6">
                                <input id="comercial" type="number" class="form-control{{ $errors->has('comercial') ? ' is-invalid' : '' }}" name="comercial" value="{{ $param->comercial }}" required autofocus>
                                @if ($errors->has('comercial'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('comercial') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="empresarial" class="col-md-4 col-form-label text-md-right">{{ __('Tarifa empresarial por cada 1000 L') }}</label>

                            <div class="col-md-6">
                                <input id="empresarial" type="number" class="form-control{{ $errors->has('empresarial') ? ' is-invalid' : '' }}" name="empresarial" value="{{ $param->comercial }}" >
                                @if ($errors->has('empresarial'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('empresarial') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{-- BOTONES --}}
                        <div class="form-group row mb-0">
                            {{-- ENVIAR --}}
                            <div class="col-md-2 offset-md-4">
                                <button id="enviar" type="submit" class="btn btn-primary">
                                    <i class="fas fa-save fa-lg"></i>&nbsp;{{ __('Save') }}
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
