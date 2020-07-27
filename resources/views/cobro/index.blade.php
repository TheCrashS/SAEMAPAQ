@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card shadow">
                <div class="card-header h5 font-weight-bold">{{ __('Cobros') }}</div>

                <div class="card-body">
                    @if (Session::has('msj'))
                        <div class="alert alert-info" role="alert">
                            {{  Session::get('msj') }}
                        </div>
                    @endif
                    @include('flash::message')
                    <div class="row justify-content-between">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-8">
                            {!! Form::open(['method' => 'GET', 'route' => 'cobro.index']) !!}
                                @csrf
                                <div class="input-group{{ $errors->has('ci') ? ' has-error' : '' }}">
                                    {!! Form::text('ci', null, ['class' => 'form-control','placeholder'=>'Buscar por Nº CI...']) !!}
                                    <span class="input-group-append">
                                        <button class="btn btn-warning" type="submit">
                                            <i class="fas fa-search fa-fw"></i>
                                        </button>
                                    </span>
                                    @if ($errors->has('ci'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ci') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <hr>
                    <div class="text-right text-info">
                        {{$cobros->total() }} {{ __('Lecturaciones') }}
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm table-striped table-hover">
                            <thead>
                                <th class="text-capitalize " scope="col">{{ __('ID') }}</th>
                                <th class="text-capitalize " scope="col">{{ __('Nombres') }}</th>
                                <th class="text-capitalize " scope="col">{{ __('Apellidos') }}</th>
                                <th class="text-capitalize " scope="col">{{ __('CI') }}</th>
                                <th class="text-capitalize " scope="col">{{ __('Fecha Lecturación') }}</th>
                                <th class="text-capitalize " scope="col">{{ __('Estado') }}</th>
                                <th class="text-capitalize " scope="col">{{ __('Acciones') }}</th>
                            </thead>
                            <tbody>
                                @foreach ($cobros as $cobro)
                                    <tr>
                                        <th scope="row">{{ $cobro->id}}</th>
                                        <td>{{ $cobro->nombres }}</td>
                                        <td>{{ $cobro->apellidos }}</td>
                                        <td>{{ $cobro->ci }}</td>
                                        <td>{{ Carbon\Carbon::parse($cobro->fecha_lectura)->format('Y-m-d') }}</td>
                                        <td>
                                            @if ($cobro->estado_pago == '1')
                                                <span class="badge badge-success" >{{ __('Pagó') }}</span>
                                            @else
                                                <span class="badge badge-danger" >{{ __('Deuda') }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div style="width: 132px;">
                                                @if ($cobro->estado_pago == '1')
                                                <a href="{{ route('cobro.pdf',$cobro->id) }}" target="_blank" class="btn btn-primary btn-sm"><span style="color:white"><i class="fas fa-file-pdf fa-lg fa-fw"></i></span></a>
                                                @else
                                                    <button type="button" class="btn btn-success btn-sm" id="modalB" data-toggle="modal" data-target="#confirmar_{{$cobro->id}}">
                                                        <span style="color:white">{{ __('Pagar') }}&nbsp;<i class="fas fa-hand-holding-usd fa-lg"></i></span>
                                                    </button>
                                                @endif

                                                {{-- <a href="{{route('cobro.show',$cobro->id)}}" class="btn btn-info btn-sm"><span style="color:white"><i class="far fa-eye fa-lg fa-fw"></i></span></a>&nbsp;
                                                <a href="{{route('cobro.edit',$cobro)}}" class="btn btn-warning btn-sm"><span style="color:white"><i class="fas fa-edit fa-lg fa-fw"></i></span></a> --}}
                                                {{-- &nbsp;<a href="{{ route('cobro.pdf',$cobro->id) }}" target="_blank" class="btn btn-secondary btn-sm"><span style="color:white"><i class="fas fa-file-pdf fa-lg fa-fw"></i></span></a> --}}
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                <div class="modal fade" id="confirmar_{{ $cobro->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmar" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content shadow">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-success" id="modalTitulo"><i class="fas fa-receipt fa-lg"></i>&nbsp;<strong>Facturación - EMAPAQ</strong></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    Factura del Contribuyente con el Nº de CI: {{ $cobro->ci }} <br>
                                                    en base a cancelación del el servicio básico de agua. <br>
                                                    Detalle <br>
                                                    Nº de Medidor: {{ $cobro->codigo }} <br>
                                                    Fecha de Lecturación: {{$cobro->fecha_lectura}} <br>
                                                    Fecha de Facturación: {{now()->toDateString()}} <br>
                                                    Monto de Cobro: <strong> {{$cobro->monto}} </strong> <br>
                                                    Categoria de Servicio:
                                                    @if ($cobro->categoria_id == 1)
                                                        "Domiciliario"
                                                    @endif
                                                    @if ($cobro->categoria_id == 2)
                                                        "Comercial"
                                                    @endif
                                                    @if ($cobro->categoria_id == 3)
                                                        "Empresarial"
                                                    @endif

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
                                                    <a href="{{ route('cobro.pdf',$cobro->id) }}" target="_blank" class="btn btn-primary"><span style="color:white"><i class="fas fa-file-pdf fa-lg fa-fw"></i></span></a>
                                                    <a href="{{ route('cobro.pagar',$cobro->id) }}" class="btn btn-success"><span style="color:white"> <strong>PAGO</strong>&nbsp;<i class="fas fa-hand-holding-usd fa-lg fa-fw"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="text-center">
                        {{-- {!! $users->render() !!} --}}
                        {!! $cobros->links() !!}
                    </div>
                    <div class="text-center">
                        Página {!!$cobros->currentPage()!!} de {!!$cobros->lastPage()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    /* $('form').submit(function (e) {
        $("#enviar").attr("disabled", true);
        return true;
    }); */

    $('#modalB').click(function (e) {
        e.preventDefault();
        $('#confirmar').modal('show');
    });


    function pagar (a) {
        event.preventDefault();
        document.getElementById(a).submit();
        $('#confirmar').modal('hide');
    };
</script>

@endsection
