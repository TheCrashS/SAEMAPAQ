@php
//require_once  'dompdf / autoload.inc.php';

$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado"); $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
//$dias[date('w')]; //$meses[date('n')-1]

@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
                    <h2 class="modal-title text-success" id="modalTitulo"><strong>Facturación - EMAPAQ</strong></h2>
                </div>
                <div class="modal-body">

                    Factura del Contribuyente con el <strong> Nº de CI: {{ $cobro->medidor->contribuyente->ci }} </strong><br>
                    en base a cancelación del el servicio básico de agua. <br>
                    <strong>DETALLE</strong> <br>
                    Nº de Medidor: {{ $cobro->medidor->codigo }} <br>
                    Fecha de Lecturación: {{$cobro->fecha_lectura}} <br>
                    Fecha de Facturación: {{now()->toDateString()}} <br>
                    Monto de Cobro: <strong>Bs. {{$cobro->monto}} </strong> <br>
                    Categoria de Servicio: {{ $cobro->Medidor->categoria->nombre}}

                </div>
            </div>
        </div>
    </div>
</body>

</html>
