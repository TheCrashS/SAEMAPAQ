@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card shadow">
                <div class="card-header h5 font-weight-bold">{{ __('Detalle - Orjj-Inst') }}</div>

                <div class="card-body">
                    @if (Session::has('msj'))
                        <div class="alert alert-info" role="alert">
                            {{  Session::get('msj') }}
                        </div>
                    @endif
                    @include('flash::message')
                    <div class="row justify-content-between">
                        <div class="col col-sm-4">
                            <a class="btn btn-outline-secondary" href="{{ route('orjjinst.index') }}"><i class="fas fa-arrow-left fa-lg fa-fw"></i>&nbsp;{{ __('Back') }}</a> 
                        </div>
                        @if ($orjjinst->correspondencia->registro_id != 1 )
                            <div class="col col-sm-4 text-right">
                                <a class="btn btn-outline-success" target="_blank" href="{{ route('orjjinst.pdf',$orjjinst->id) }}"><i class="fas fa-file-pdf fa-lg fa-fw"></i>&nbsp;{{ __('PDF') }}</a> 
                            </div>
                        @endif
                    </div>
                    <hr>
                    <div class="container">
                        <div class="row justify-content-around">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="n_cc" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Nº CC') }}</label>
                                    <div class="col-md-6">
                                        <input id="n_cc" type="text" class="form-control form-control-sm{{ $errors->has('n_cc') ? ' is-invalid' : '' }}" name="n_cc" value="{{ $orjjinst->correspondencia->n_cc }}" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fecha_ref" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Fecha Referencia') }}</label>
                                    <div class="col-md-6">
                                        <input id="fecha_ref" type="date" class="form-control form-control-sm{{ $errors->has('fecha_ref') ? ' is-invalid' : '' }}" name="fecha_ref" value="{{ $orjjinst->correspondencia->fecha_ref }}" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="f_vv" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Fecha Ventanilla Virtual') }}</label>
                                    <div class="col-md-6">
                                        <input id="f_vv" type="date" class="form-control form-control-sm{{ $errors->has('f_vv') ? ' is-invalid' : '' }}" name="f_vv" value="{{ $orjjinst->correspondencia->f_vv }}" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="autoridad" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Autoridad') }}</label>
                                    <div class="col-md-6">
                                        <input id="autoridad" type="text" class="form-control form-control-sm{{ $errors->has('autoridad') ? ' is-invalid' : '' }}" name="autoridad" value="{{ $orjjinst->correspondencia->autoridad }}" disabled >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cargo" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Cargo') }}</label>
                                    <div class="col-md-6">
                                        <input id="cargo" type="text" class="form-control form-control-sm{{ $errors->has('cargo') ? ' is-invalid' : '' }}" name="cargo" value="{{ $orjjinst->correspondencia->cargo }}" disabled >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="institucion" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Institución') }}</label>
                                    <div class="col-md-6">
                                        <input id="institucion" type="text" class="form-control form-control-sm{{ $errors->has('institucion') ? ' is-invalid' : '' }}" name="institucion" value="{{ $orjjinst->correspondencia->institucion }}" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="departamento_id" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Departamento') }}</label>
                                    <div class="col-md-6">
                                        {!! Form::select('departamento_id', $departamentos, $orjjinst->correspondencia->departamento->id, ['class' => "form-control form-control-sm $errors->has('departamento_id') ? ' is-invalid' : '' ",'required' => true ,'disabled']) !!}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="n_tramite" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Nº de Tramite') }}</label>
                                    <div class="col-md-6">
                                        <input id="n_tramite" type="text" class="form-control form-control-sm{{ $errors->has('n_tramite') ? ' is-invalid' : '' }}" name="n_tramite" value="{{ $orjjinst->correspondencia->n_tramite }}" disabled >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="atencion" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Atención') }}</label>
                                    <div class="col-md-6">
                                        <input id="atencion" type="text" class="form-control form-control-sm{{ $errors->has('atencion') ? ' is-invalid' : '' }}" name="atencion" value="{{ $orjjinst->correspondencia->atencion }}" disabled >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cc_asfi" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('CC ASFI') }}</label>
                                    <div class="col-md-6">
                                        <input id="cc_asfi" type="text" class="form-control form-control-sm{{ $errors->has('cc_asfi') ? ' is-invalid' : '' }}" name="cc_asfi" value="{{ $orjjinst->correspondencia->cc_asfi }}" disabled >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="foliacion" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Foliación') }}</label>
                                    <div class="col-md-6">
                                        <input id="foliacion" type="text" class="form-control form-control-sm{{ $errors->has('foliacion') ? ' is-invalid' : '' }}" name="foliacion" value="{{ $orjjinst->correspondencia->foliacion }}" disabled >
                                    </div>
                                </div>

                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="tipo_proc" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Tipo de Proc.') }}</label>
                                    <div class="col-md-6">
                                        <input id="tipo_proc" type="text" class="form-control form-control-sm{{ $errors->has('tipo_proc') ? ' is-invalid' : '' }}" name="tipo_proc" value="{{ $orjjinst->tipo_proc }}" disabled >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="n_expediente" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Nº de Expediente') }}</label>
                                    <div class="col-md-6">
                                        <input id="n_expediente" type="text" class="form-control form-control-sm{{ $errors->has('n_expediente') ? ' is-invalid' : '' }}" name="n_expediente" value="{{ $orjjinst->n_expediente }}" disabled >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="n_pliego_o_proviedo" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Nº de Pliego o Nº de Proveido') }}</label>
                                    <div class="col-md-6">
                                        <input id="n_pliego_o_proviedo" type="text" class="form-control form-control-sm{{ $errors->has('n_pliego_o_proviedo') ? ' is-invalid' : '' }}" name="n_pliego_o_proviedo" value="{{ $orjjinst->n_pliego_o_proviedo }}" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ianus_nurej" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('IANUS/NUREJ') }}</label>
                                    <div class="col-md-6">
                                        <input id="ianus_nurej" type="text" class="form-control form-control-sm{{ $errors->has('ianus_nurej') ? ' is-invalid' : '' }}" name="ianus_nurej" value="{{ $orjjinst->ianus_nurej }}" disabled >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="adicional" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Adicional') }}</label>
                                    <div class="col-md-6">
                                        <input id="adicional" type="text" class="form-control form-control-sm{{ $errors->has('adicional') ? ' is-invalid' : '' }}" name="adicional" value="{{ $orjjinst->adicional }}" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="demandante" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Demandante') }}</label>
                                    <div class="col-md-6">
                                        <input id="demandante" type="text" class="form-control form-control-sm{{ $errors->has('demandante') ? ' is-invalid' : '' }}" name="demandante" value="{{ $orjjinst->correspondencia->demandante }}" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="demandado" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Demandado') }}</label>
                                    <div class="col-md-6">
                                        <input id="demandado" type="text" class="form-control form-control-sm{{ $errors->has('demandado') ? ' is-invalid' : '' }}" name="demandado" value="{{ $orjjinst->correspondencia->demandado }}" disabled >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="r" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('R') }}</label>
                                    <div class="col-md-6">
                                        <input id="r" type="text" class="form-control form-control-sm{{ $errors->has('r') ? ' is-invalid' : '' }}" name="r" value="{{ $orjjinst->r }}" disabled >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cite" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Nº CITE') }}</label>
                                    <div class="col-md-6">
                                        <input id="cite" type="text" class="form-control form-control-sm{{ $errors->has('cite') ? ' is-invalid' : '' }}" name="cite" value="{{ $orjjinst->cite }}" disabled >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="estado_id" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Estado') }}</label>
                                    <div class="col-md-6">
                                        {!! Form::select('estado_id', $estados, $orjjinst->correspondencia->estado->id, ['class' => "form-control form-control-sm $errors->has('estado_id') ? ' is-invalid' : '' ",'required' => true,'disabled']) !!}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="registro_id" class="col-md-5 col-form-label col-form-label-sm text-md-right">{{ __('Registro') }}</label>
                                    <div class="col-md-6">
                                        {!! Form::select('registro_id', $registros, $orjjinst->correspondencia->registro->id, ['class' => "form-control form-control-sm $errors->has('registro_id') ? ' is-invalid' : '' ",'required' => true,'disabled']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection