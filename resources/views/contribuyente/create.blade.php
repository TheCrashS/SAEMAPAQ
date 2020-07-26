@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header h5 font-weight-bold">{{ __('Orjj-Inst') }}</div>

                <div class="card-body">
                    @include('flash::message')
                    <div class="row justify-content-between">
                        <div class="col col-sm-4">
                            <a class="btn btn-outline-secondary" href="{{ route('orjjinst.index') }}"><i class="fas fa-arrow-left fa-lg fa-fw"></i>&nbsp;{{ __('Back') }}</a> 
                        </div>
                    </div>
                    <hr>
                    <form method="POST" action="{{ route('orjjinst.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="n_cc" class="col-md-4 col-form-label text-md-right">{{ __('Nº CC') }}</label>

                            <div class="col-md-6">
                                <input id="n_cc" type="text" class="form-control{{ $errors->has('n_cc') ? ' is-invalid' : '' }}" name="n_cc" value="{{ old('n_cc') }}" required autofocus>
                                @if ($errors->has('n_cc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('n_cc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_ref" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Referencia') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_ref" type="date" class="form-control{{ $errors->has('fecha_ref') ? ' is-invalid' : '' }}" name="fecha_ref" value="{{ date('Y-m-d') }}" required>
                                @if ($errors->has('fecha_ref'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fecha_ref') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="f_vv" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Ventanilla Virtual') }}</label>

                            <div class="col-md-6">
                                <input id="f_vv" type="date" class="form-control{{ $errors->has('f_vv') ? ' is-invalid' : '' }}" name="f_vv" value="{{ date('Y-m-d') }}" required>
                                @if ($errors->has('f_vv'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('f_vv') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="autoridad" class="col-md-4 col-form-label text-md-right">{{ __('Autoridad') }}</label>

                            <div class="col-md-6">
                                <input id="autoridad" type="text" class="form-control{{ $errors->has('autoridad') ? ' is-invalid' : '' }}" name="autoridad" value="{{ old('autoridad') }}" required autofocus>
                                @if ($errors->has('autoridad'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('autoridad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cargo" class="col-md-4 col-form-label text-md-right">{{ __('Cargo') }}</label>

                            <div class="col-md-6">
                                <input id="cargo" type="text" class="form-control{{ $errors->has('cargo') ? ' is-invalid' : '' }}" name="cargo" value="{{ old('cargo') }}" required autofocus>
                                @if ($errors->has('cargo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cargo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="institucion" class="col-md-4 col-form-label text-md-right">{{ __('Institución') }}</label>

                            <div class="col-md-6">
                                <input id="institucion" type="text" class="form-control{{ $errors->has('institucion') ? ' is-invalid' : '' }}" name="institucion" value="{{ old('institucion') }}" >
                                @if ($errors->has('institucion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('institucion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="departamento_id" class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>

                            <div class="col-md-6">
                                {!! Form::select('departamento_id', $departamentos, null, ['class' => "form-control $errors->has('departamento_id') ? ' is-invalid' : '' ",'required' => true]) !!}
                                @if ($errors->has('departamento_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('departamento_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="n_tramite" class="col-md-4 col-form-label text-md-right">{{ __('Nº de Tramite') }}</label>

                            <div class="col-md-6">
                                <input id="n_tramite" type="text" class="form-control{{ $errors->has('n_tramite') ? ' is-invalid' : '' }}" name="n_tramite" value="{{ old('n_tramite') }}" required autofocus>
                                @if ($errors->has('n_tramite'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('n_tramite') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="atencion" class="col-md-4 col-form-label text-md-right">{{ __('Atención') }}</label>

                            <div class="col-md-6">
                                <input id="atencion" type="text" class="form-control{{ $errors->has('atencion') ? ' is-invalid' : '' }}" name="atencion" value="{{ old('atencion') }}" required autofocus>
                                @if ($errors->has('atencion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('atencion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cc_asfi" class="col-md-4 col-form-label text-md-right">{{ __('CC ASFI') }}</label>

                            <div class="col-md-6">
                                <input id="cc_asfi" type="text" class="form-control{{ $errors->has('cc_asfi') ? ' is-invalid' : '' }}" name="cc_asfi" value="{{ old('cc_asfi') }}" required autofocus>
                                @if ($errors->has('cc_asfi'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cc_asfi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="foliacion" class="col-md-4 col-form-label text-md-right">{{ __('Foliación') }}</label>

                            <div class="col-md-6">
                                <input id="foliacion" type="text" class="form-control{{ $errors->has('foliacion') ? ' is-invalid' : '' }}" name="foliacion" value="{{ old('foliacion') }}" required autofocus>
                                @if ($errors->has('foliacion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('foliacion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tipo_proc" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Proc.') }}</label>

                            <div class="col-md-6">
                                <input id="tipo_proc" type="text" class="form-control{{ $errors->has('tipo_proc') ? ' is-invalid' : '' }}" name="tipo_proc" value="{{ old('tipo_proc') }}" required autofocus>
                                @if ($errors->has('tipo_proc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tipo_proc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="n_expediente" class="col-md-4 col-form-label text-md-right">{{ __('Nº de Expediente') }}</label>

                            <div class="col-md-6">
                                <input id="n_expediente" type="text" class="form-control{{ $errors->has('n_expediente') ? ' is-invalid' : '' }}" name="n_expediente" value="{{ old('n_expediente') }}" required autofocus>
                                @if ($errors->has('n_expediente'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('n_expediente') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="n_pliego_o_proviedo" class="col-md-4 col-form-label text-md-right">{{ __('Nº de Pliego o Nº de Proveido') }}</label>

                            <div class="col-md-6">
                                <input id="n_pliego_o_proviedo" type="text" class="form-control{{ $errors->has('n_pliego_o_proviedo') ? ' is-invalid' : '' }}" name="n_pliego_o_proviedo" value="{{ old('n_pliego_o_proviedo') }}" autofocus>
                                @if ($errors->has('n_pliego_o_proviedo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('n_pliego_o_proviedo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ianus_nurej" class="col-md-4 col-form-label text-md-right">{{ __('IANUS/NUREJ') }}</label>

                            <div class="col-md-6">
                                <input id="ianus_nurej" type="text" class="form-control{{ $errors->has('ianus_nurej') ? ' is-invalid' : '' }}" name="ianus_nurej" value="{{ old('ianus_nurej') }}" required autofocus>
                                @if ($errors->has('ianus_nurej'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ianus_nurej') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adicional" class="col-md-4 col-form-label text-md-right">{{ __('Adicional') }}</label>

                            <div class="col-md-6">
                                <input id="adicional" type="text" class="form-control{{ $errors->has('adicional') ? ' is-invalid' : '' }}" name="adicional" value="{{ old('adicional') }}" autofocus>
                                @if ($errors->has('adicional'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('adicional') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="demandante" class="col-md-4 col-form-label text-md-right">{{ __('Demandante') }}</label>

                            <div class="col-md-6">
                                <input id="demandante" type="text" class="form-control{{ $errors->has('demandante') ? ' is-invalid' : '' }}" name="demandante" value="{{ old('demandante') }}" required autofocus>
                                @if ($errors->has('demandante'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('demandante') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="demandado" class="col-md-4 col-form-label text-md-right">{{ __('Demandado') }}</label>

                            <div class="col-md-6">
                                <input id="demandado" type="text" class="form-control{{ $errors->has('demandado') ? ' is-invalid' : '' }}" name="demandado" value="{{ old('demandado') }}" required autofocus>
                                @if ($errors->has('demandado'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('demandado') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="doc" class="col-md-4 col-form-label text-md-right">{{ __('Doc') }}</label>

                            <div class="col-md-6">
                                <input id="doc" type="text" class="form-control{{ $errors->has('doc') ? ' is-invalid' : '' }}" name="doc" value="{{ old('doc') }}">
                                @if ($errors->has('doc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('doc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ci_nit" class="col-md-4 col-form-label text-md-right">{{ __('CI/NIT') }}</label>

                            <div class="col-md-6">
                                <input id="ci_nit" type="text" class="form-control{{ $errors->has('ci_nit') ? ' is-invalid' : '' }}" name="ci_nit" value="{{ old('ci_nit') }}" >
                                @if ($errors->has('ci_nit'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ci_nit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exp" class="col-md-4 col-form-label text-md-right">{{ __('Exp.') }}</label>

                            <div class="col-md-6">
                                <input id="exp" type="text" class="form-control{{ $errors->has('exp') ? ' is-invalid' : '' }}" name="exp" value="{{ old('exp') }}" >
                                @if ($errors->has('exp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('exp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="r" class="col-md-4 col-form-label text-md-right">{{ __('R') }}</label>

                            <div class="col-md-6">
                                <input id="r" type="text" class="form-control{{ $errors->has('r') ? ' is-invalid' : '' }}" name="r" value="{{ old('r') }}" required autofocus>
                                @if ($errors->has('r'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('r') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cite" class="col-md-4 col-form-label text-md-right">{{ __('Nº CITE') }}</label>

                            <div class="col-md-6">
                                <input id="cite" type="text" class="form-control{{ $errors->has('cite') ? ' is-invalid' : '' }}" name="cite" value="{{ old('cite') }}" required autofocus>
                                @if ($errors->has('cite'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cite') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="estado_id" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                            <div class="col-md-6">
                                {!! Form::select('estado_id', $estados, null, ['class' => "form-control $errors->has('estado_id') ? ' is-invalid' : '' ",'required' => true]) !!}
                                @if ($errors->has('estado_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('estado_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="registro_id" class="col-md-4 col-form-label text-md-right">{{ __('Registro') }}</label>

                            <div class="col-md-6">
                                {!! Form::select('registro_id', $registros, null, ['class' => "form-control $errors->has('registro_id') ? ' is-invalid' : '' ",'required' => true]) !!}
                                @if ($errors->has('registro_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('registro_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cuenta" class="col-md-4 col-form-label text-md-right">{{ __('Nº Cuenta') }}</label>

                            <div class="col-md-6">
                                <input id="cuenta" type="text" class="form-control{{ $errors->has('cuenta') ? ' is-invalid' : '' }}" name="cuenta" value="{{ old('cuenta') }}">
                                @if ($errors->has('cuenta'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cuenta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="moneda_id" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Moneda') }}</label>

                            <div class="col-md-6">
                                {!! Form::select('moneda_id', $monedas, null, ['class' => "form-control $errors->has('moneda_id') ? ' is-invalid' : '' "]) !!}
                                @if ($errors->has('moneda_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('moneda_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="monto" class="col-md-4 col-form-label text-md-right">{{ __('Monto') }}</label>

                            <div class="col-md-6">
                                <input id="monto" type="text" class="form-control{{ $errors->has('monto') ? ' is-invalid' : '' }}" name="monto" value="{{ old('monto') }}">
                                @if ($errors->has('monto'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('monto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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

        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
                }, false);
            });
            }, false);
        })();
    </script>

@endpush