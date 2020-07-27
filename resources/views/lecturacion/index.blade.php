@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card shadow">
                <div class="card-header h5 font-weight-bold">{{ __('Lecturaciones') }}</div>

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
                            {!! Form::open(['method' => 'GET', 'route' => 'contribuyente.index']) !!}
                                @csrf
                                <div class="input-group{{ $errors->has('codigo') ? ' has-error' : '' }}">
                                    {!! Form::text('codigo', null, ['class' => 'form-control','placeholder'=>'Buscar por Numero de Medidor...']) !!}
                                    <span class="input-group-append">
                                        <button class="btn btn-warning" type="submit">
                                            <i class="fas fa-search fa-fw"></i>
                                        </button>
                                    </span>
                                    @if ($errors->has('ci'))
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
                       {{ __('Register') }}s
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
