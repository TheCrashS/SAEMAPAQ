@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header h5 font-weight-bold">{{ __('Lecturacion') }}</div>

                <div class="card-body">
                    @include('flash::message')

                    <hr>
                    <form method="POST" action="{{ route('lecturacion.create') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="n_cc" class="col-md-4 col-form-label text-md-right">{{ __('Codigo del medidor') }}</label>

                            <div class="col-md-6">
                                <input id="n_cc" type="text" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" name="codigo" value="{{ old('codigo') }}" required autofocus>
                                @if ($errors->has('codigo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('codigo') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group row mb-0">
                            <div class="col-md-2 offset-md-4">
                                <button id="enviar" type="submit" class="btn btn-primary">
                                    <i class="fas fa-save fa-lg"></i>&nbsp;{{ ('Buscar') }}
                                </button>
                            </div>
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="consumo" class="col-md-4 col-form-label text-md-right">{{ __('Consumo') }}</label>

                            <div class="col-md-6">
                                <input id="autoridad" type="number" class="form-control{{ $errors->has('consumo') ? ' is-invalid' : '' }}" name="consumo" value="{{ old('consumo') }}" required autofocus>
                                @if ($errors->has('consumo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('consumo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                           <div class="form-group row mb-0">
                            <div class="col-md-2 offset-md-4">
                                <button id="enviar" type="submit" class="btn btn-primary">
                                    <i class="fas fa-save fa-lg"></i>&nbsp;{{ __('Guardar') }}
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
