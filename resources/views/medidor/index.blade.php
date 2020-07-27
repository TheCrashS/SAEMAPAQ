@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card shadow">
                <div class="card-header h5 font-weight-bold">{{ __('Medidor') }}</div>

                <div class="card-body">
                    @if (Session::has('msj'))
                        <div class="alert alert-info" role="alert">
                            {{  Session::get('msj') }}
                        </div>
                    @endif
                    @include('flash::message')
                    <div class="row justify-content-between">
                        <div class="col-sm-4">
                             <a class="btn btn-outline-success" href="{{ route('medidor.create') }}">
                             <i class="fas fa-clipboard-list fa-lg fa-fw"></i>&nbsp;{{ __('Register') }}</a>
                        </div>
                        <div class="col-sm-8">
                            {!! Form::open(['method' => 'GET', 'route' => 'medidor.index']) !!}
                                @csrf
                                <div class="input-group{{ $errors->has('codigo') ? ' has-error' : '' }}">
                                    {!! Form::text('codigo', null, ['class' => 'form-control','placeholder'=>'Buscar por Nº Código']) !!}
                                    <span class="input-group-append">
                                        <button class="btn btn-warning" type="submit">
                                            <i class="fas fa-search fa-fw"></i>
                                        </button>
                                    </span>
                                    @if ($errors->has('codigo'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('codigo') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <hr>
                    <div class="text-right text-info">
                        {!!$contris->total()!!} {{ __('Medidores') }}
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm table-striped table-hover">
                            <thead>
                            <th class="text-capitalize " scope="col">{{ __('ID') }}</th>
                                <th class="text-capitalize " scope="col">{{ __('Código Medidor') }}</th>
                                <th class="text-capitalize " scope="col">{{ __('Dirección') }}</th>
                                <th class="text-capitalize " scope="col">{{ __('Categoria') }}</th>
                                <th class="text-capitalize " scope="col">{{ __('Contribuyente CI') }}</th>
                                <th class="text-capitalize " scope="col">{{ __('Estado') }}</th>
                                <th class="text-capitalize " scope="col">{{ __('Acciones') }}</th>
                            </thead>
                            <tbody>
                                @foreach ($contris as $contri)
                                    <tr>
                                        <th scope="row">{{ $contri->id}}</th>
                                        <td>{{ $contri->codigo }}</td>
                                        <td>{{$contri->direccion}}</td>
                                        <td>{{$contri->categoria->nombre }}</td>
                                        <td>{{$contri->contribuyente->ci }}</td>
                                        <td>
                                            @if ($contri->estado == '1')
                                                <span class="badge badge-success" >{{ __('Enabled') }}</span>
                                            @else
                                                <span class="badge badge-danger" >{{ __('Disabled') }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div style="width: 132px;">
                                                <a href="{{route('medidor.show',$contri->id)}}" class="btn btn-info btn-sm">
                                                    <span style="color:white"><i class="far fa-eye fa-lg fa-fw"></i></span>
                                                </a>&nbsp;
                                                <a href="{{route('medidor.edit',$contri)}}" class="btn btn-warning btn-sm"><span style="color:white">
                                                <i class="fas fa-edit fa-lg fa-fw"></i></span></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="text-center">
                        {{-- {!! $users->render() !!} --}}
                        {!! $contris->links() !!}
                    </div>
                    <div class="text-center">
                        Página {!!$contris->currentPage()!!} de {!!$contris->lastPage()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
