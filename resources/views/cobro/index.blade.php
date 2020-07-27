@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card shadow">
                <div class="card-header h5 font-weight-bold">{{ __('Contribuyente') }}</div>

                <div class="card-body">
                    @if (Session::has('msj'))
                        <div class="alert alert-info" role="alert">
                            {{  Session::get('msj') }}
                        </div>
                    @endif
                    @include('flash::message')
                    <div class="row justify-content-between">
                        <div class="col-sm-4">
                             <a class="btn btn-outline-success" href="{{ route('contribuyente.create') }}"><i class="fas fa-clipboard-list fa-lg fa-fw"></i>&nbsp;{{ __('Register') }}</a>
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
                        {{-- {!!$cobros->total()!!} {{ __('Register') }}s --}}
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm table-striped table-hover">
                            <thead>
                                <th class="text-capitalize " scope="col">{{ __('ID') }}</th>
                                <th class="text-capitalize " scope="col">{{ __('Nombres') }}</th>
                                <th class="text-capitalize " scope="col">{{ __('Apellidos') }}</th>
                                <th class="text-capitalize " scope="col">{{ __('CI') }}</th>
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
                                        <td>
                                            @if ($cobro->estado_pago == '1')
                                                <span class="badge badge-success" >{{ __('Pagó') }}</span>
                                            @else
                                                <span class="badge badge-warning" >{{ __('Deuda') }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div style="width: 132px;">
                                                <a href="{{route('cobro.show',$cobro->id)}}" class="btn btn-info btn-sm"><span style="color:white"><i class="far fa-eye fa-lg fa-fw"></i></span></a>&nbsp;
                                                <a href="{{route('cobro.edit',$cobro)}}" class="btn btn-warning btn-sm"><span style="color:white"><i class="fas fa-edit fa-lg fa-fw"></i></span></a>
                                                {{-- &nbsp;<a href="{{ route('cobro.pdf',$cobro->id) }}" target="_blank" class="btn btn-secondary btn-sm"><span style="color:white"><i class="fas fa-file-pdf fa-lg fa-fw"></i></span></a> --}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="text-center">
                        {{-- {!! $users->render() !!} --}}
                        {{-- {!! $cobros->links() !!} --}}
                    </div>
                    <div class="text-center">
                        {{-- Página {!!$cobros->currentPage()!!} de {!!$cobros->lastPage()!!} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
