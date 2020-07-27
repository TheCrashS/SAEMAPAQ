@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header h5 font-weight-bold">{{ __('Contribuyente') }}</div>

                <div class="card-body">
                    @include('flash::message')
                    <div class="row justify-content-between">
                        <div class="col col-sm-4">
                            <a class="btn btn-outline-secondary" href="{{ route('contribuyente.index') }}"><i class="fas fa-arrow-left fa-lg fa-fw"></i>&nbsp;{{ __('Back') }}</a>
                        </div>
                    </div>
                    <hr>
                    <form method="POST" action="{{ route('contribuyente.update',$contri) }}">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                            <label for="nombres" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control{{ $errors->has('nombres') ? ' is-invalid' : '' }}" name="nombres" value="{{  $contri->nombres }}"  required autofocus>
                                @if ($errors->has('nombres'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombres') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellidos" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" name="apellidos" value="{{ $contri->apellidos }}" required autofocus>
                                @if ($errors->has('apellidos'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ci_nit" class="col-md-4 col-form-label text-md-right">{{ __('CI/NIT') }}</label>

                            <div class="col-md-6">
                                <input id="ci_nit" type="text" class="form-control{{ $errors->has('ci_nit') ? ' is-invalid' : '' }}" name="ci_nit" value="{{ $contri->ci }}" >
                                @if ($errors->has('ci_nit'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ci_nit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_nac" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_nac" type="date" class="form-control{{ $errors->has('fecha_nac') ? ' is-invalid' : '' }}" name="fecha_nac" value="{{ $contri->fecha_nac }}" required>
                                @if ($errors->has('fecha_nac'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fecha_nac') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ $contri->telefono }}" required autofocus>
                                @if ($errors->has('telefono'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ $contri->direccion }}" required autofocus>
                                @if ($errors->has('direccion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                            <div class="col-md-6">
                                {!! Form::checkbox('estado', 'estados', $contri->estado , ['class' => "pull-right form-control "]) !!}
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
                            {{-- ELIMINAR --}}
                            <div class="col-md-2 offset-md-1 ">
                                <button type="button" class="btn btn-danger" id="modalB" data-toggle="modal" data-target="#confirmar">
                                    <span style="color:white"><i class="fas fa-trash fa-lg"></i>&nbsp;{{ __('Delete') }}</span>
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="confirmar" tabindex="-1" role="dialog" aria-labelledby="confirmar" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content shadow">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="modalTitulo"><i class="fas fa-exclamation-triangle fa-lg"></i>&nbsp;<strong>Advertencia</strong></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Está seguro de que desea eliminar el registro de CI; {{ $contri->ci }}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
                                            <button type="button" class="btn btn-danger" onclick="borrar()">{{ __('Delete') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    {{-- FORM DEL BOTON ELIMINAR --}}
                    <form id="destroy-form" action="{{ route('contribuyente.destroy',$contri->id) }}" method="POST" style="display: none;">
                        @method('DELETE')
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $('form').submit(function (e) {
            $("#enviar").attr("disabled", true);
            return true;
        });
        $('#modalB').click(function (e) {
            e.preventDefault();
            $('#confirmar').modal('show');
        });
        function borrar () {
            event.preventDefault();
            document.getElementById("destroy-form").submit();
            $('#confirmar').modal('hide');
        };
    </script>
@endpush
