@php $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado"); $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
//$dias[date('w')]; //$meses[date('n')-1] 
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>{{ $orjjinst->correspondencia->n_cc }}</title>
    <link rel="shortcut icon" href="{{ asset('icon/icono.png') }}" type="image/x-icon">
    <style>
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
    </style>
</head>

<body>
    <p class="cursiva sin gris">
        C.G.V.V.INF Nº <strong>{{ $orjjinst->correspondencia->n_cc }}</strong>/{{ date('Y') }}
    </p>
    <p>
        VILLAZÓN {{ date('d') }} de {{ ucfirst( Date::now()->format('F')) }} de {{ date('Y') }}
    </p>

    <p>
        Señor(a):<br> {{ ucwords($orjjinst->correspondencia->autoridad) }}<br>
        <strong>{{ strtoupper($orjjinst->correspondencia->cargo) }}</strong><br>
        <strong>{{ strtoupper($orjjinst->correspondencia->institucion) }}</strong>
    </p>

    <p>
        <strong>Proceso:&nbsp;{{ strtoupper($orjjinst->tipo_proc) }}</strong><br>
        <strong>Número de Expediente.:&nbsp;{{ strtoupper($orjjinst->n_expediente) }}</strong><br>
        <strong>Núm. De Pliego de Cargo o Núm De Proveído Inicio de Ejecución Tributaria:&nbsp;{{ strtoupper($orjjinst->n_pliego_o_proviedo) }}</strong><br>
        <strong>Código IANUS/NUREJ Nº &nbsp;{{ strtoupper($orjjinst->ianus_nurej) }}</strong><br>
        <strong>Demandante/s:&nbsp;{{ strtoupper($orjjinst->correspondencia->demandante) }}</strong><br>
        <strong>Demandado/s:&nbsp;{{ strtoupper($orjjinst->correspondencia->demandado) }}</strong><br>
        {{ $orjjinst->correspondencia->departamento->nombre}}
    </p>

    <p>De nuestra mayor consideración:</p>
    <br>

    <p class="centro subrayado"><strong>Ref.: TRÁMITE Nº {{ $orjjinst->correspondencia->n_tramite }}</strong></p>
    <p class="centro subrayado"><strong>ATENCIÓN {{ strtoupper($orjjinst->correspondencia->atencion )}}.-</strong></p>


    @if ($orjjinst->correspondencia->registro_id == 2)
    <p class="justificado tabulacion">
        A través de Carta Circular ASFI/OD CB/CC-{{ $orjjinst->correspondencia->cc_asfi.'/'.date('Y') }}, de la Autoridad de Supervisión
        del Sistema Financiero, con Trámite Nº {{ $orjjinst->correspondencia->n_tramite }}, {{$orjjinst->r.$orjjinst->correspondencia->foliacion }},
        en conocimiento de cite OF. Nº {{ $orjjinst->cite }}, emitida por su autoridad, donde establece la solicitud de <strong>RETENCION DE FONDOS</strong>
        seguido por <strong>{{ $orjjinst->correspondencia->demandante }}</strong> en contra de <strong>{{ $orjjinst->correspondencia->demandado }}.</strong>
        <br><br>
        Al respecto se informa que revisada nuestra base de datos informáticos.
        <br><br>
        El señor {{ $orjjinst->correspondencia->demandado }} con {{ $orjjinst->correspondencia->doc }} Nº {{ $orjjinst->correspondencia->ci_nit }}{{ ($orjjinst->correspondencia->doc == "CI") ? " ".$orjjinst->correspondencia->exp : "" }}
        cuenta con registros de operaciones en nuestra Cooperativa y en cumplimiento de la medida dispuesta por su autoridad la entidad procedió a la RETENCIÓN DE FONDOS,
        de Caja de Ahorro en {{ $orjjinst->correspondencia->moneda->moneda }} Nº {{ $orjjinst->correspondencia->cuenta }} por el monto de {{ $orjjinst->correspondencia->moneda->sigla }} {{ $orjjinst->correspondencia->monto }}.
    </p>
    @else
    <p class="justificado tabulacion">
        A través de Carta Circular ASFI/DAJ/CC-{{ $orjjinst->correspondencia->cc_asfi }}, de la Autoridad de Supervisión
        del Sistema Financiero, con Trámite Nº {{ $orjjinst->correspondencia->n_tramite }}, {{$orjjinst->r.$orjjinst->correspondencia->foliacion }},
        en conocimiento de cite Nº {{ $orjjinst->cite }}, emitida por su autoridad, al respecto se informa que revisada
        nuestra base de datos informáticos, la(s) persona(s) natural(es) y/o jurídica(s), mencionada(s)
        en el citado requerimiento, no cuentan con registro de operaciones: activas, pasivas y contingentes en nuestra Cooperativa.
    </p>
    @endif
    <br>
    <p class="centro">
        Sin otro particular, saludamos a usted con atención.<br><br>
        <strong>Por la Cooperativa de Ahorro y Crédito Abierta "Monseñor Félix Gainza R.L."</strong>
    </p>
    <br><br><br><br><br>
    @if ($orjjinst->correspondencia->registro_id == 2)
    <p class="sin foota">
        HHM/Lgq<br>
        Cc/arch<br>
        Cc/Captaciones
    </p>    
    @else
    <p class="sin foota">
        HHM/Lgq
    </p>
    <p class="sin tabulacion2 foota">
        c.c./Arch.
    </p>    
    @endif
    
</body>

</html>