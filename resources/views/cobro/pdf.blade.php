{{-- @php $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado"); $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
//$dias[date('w')]; //$meses[date('n')-1]
@endphp --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> EMAPAQ </title>
    {{--  --}}<link rel="shortcut icon" href="{{ asset('icon/icono.png') }}" type="image/x-icon">
    {{-- <style>
        .tabulacion {
            text-indent: 40px;
        }

        .tabulacion2 {
            text-indent: 52px;
        }

        .subrayado {
            text-decoration: underline;
        }

        .centro {
            text-align: center;
        }

        .justificado {
            text-align: justify;
        }

        .cursiva:first-line {
            font-style: italic;
        }

        .gris {
            color: #444;
        }

        p {
            margin: 0 0 10 0;
        }

        .sin {
            margin: 0 0 0 0;
        }

        body {
            padding: 2.2cm 1.8cm;
        }

        .foota {
            font-size: 9;
        }
    </style> --}}
</head>

<body>
    <div class="modal fade" id="confirmar" tabindex="-1" role="dialog" aria-labelledby="confirmar" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="modalTitulo"><i class="fas fa-receipt fa-lg"></i>&nbsp;<strong>Facturación - EMAPAQ</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    Factura del Contribuyente con el Nº de CI: {{ $cobro->medidor->contribuyente->ci }} <br>
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
            </div>
        </div>
    </div>
</body>

</html>
