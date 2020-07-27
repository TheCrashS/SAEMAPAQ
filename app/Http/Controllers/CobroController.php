<?php

namespace App\Http\Controllers;

use App\Cobro;
use App\Lecturacion;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class CobroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('cobro');
    }

    public function index(Request $request)
    {
        //
        $lecturas = Lecturacion::join('medidors', 'lecturacions.medidor_id','=','medidors.id')->
        join('contribuyentes','medidors.contribuyente_id','=','contribuyentes.id')->
        where('contribuyentes.ci','LIKE','%'.$request->ci.'%')->//paginate(10);

        select('lecturacions.id','contribuyentes.nombres','contribuyentes.apellidos','contribuyentes.ci','lecturacions.consumo','lecturacions.fecha_lectura','medidors.codigo','lecturacions.monto','medidors.categoria_id','lecturacions.estado_pago')->orderBy('id')->paginate(5);
        //dd($lecturas->all());
        return view('cobro.index')->with('cobros',$lecturas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$lectura = Lecturacion::updateOrCreate ($request->id);

        $lectura = Lecturacion::find($request->id);

        $lectura->monto = $lectura->consumo*$lectura->medidor->categoria->tarifa/100;
        $lectura->fecha_cobro = now()->toDateString();
        $lectura->estado_pago = 1;

        if($lectura->save())
            return view('cobro.pdf');
        else
        {
            $lecturas = Lecturacion::join('medidors', 'lecturacions.medidor_id','=','medidors.id')->
            join('contribuyentes','medidors.contribuyente_id','=','contribuyentes.id')->
            where('contribuyentes.ci','LIKE','%'.$request->ci.'%')->//paginate(10);

            select('lecturacions.id','contribuyentes.nombres','contribuyentes.apellidos','contribuyentes.ci','lecturacions.consumo','lecturacions.fecha_lectura','medidors.codigo','lecturacions.monto','medidors.categoria_id','lecturacions.estado_pago')->orderBy('id')->paginate(5);
            return view('cobro.index')->with('cobros',$lecturas);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cobro  $cobro
     * @return \Illuminate\Http\Response
     */
    public function show(Cobro $cobro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cobro  $cobro
     * @return \Illuminate\Http\Response
     */
    public function edit(Cobro $cobro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cobro  $cobro
     * @return \Illuminate\Http\Response
     */
    public function update(Request  $request,Cobro  $cobro)
    {
        //
        dd('a');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cobro  $cobro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cobro $cobro)
    {
        //
    }

    public function pdf($id)
    {
        //
        $cobro = Lecturacion::find($id);

        //$pdf->set_option('defaultFont', 'Courier');
        //$pdf->setPaper('letter');
        $datos = [
            'cobro' => $cobro
        ];

        $pdf = \PDF::loadView('cobro.pdf', $datos);
        //$pdf->loadHtml(view('cobro.pdf')->with($datos));
        //$pdf->render();
        return $pdf->stream('Factura -'.$cobro->id.'.pdf',['Attachment' => 0]);
    }

    public function pagar(Request $request, $id)
    {
        $cobro = Lecturacion::find($id);
        $cobro->fecha_cobro = now()->toDateString();
        $cobro->estado_pago = true;

        if ($cobro->save())
        {
         //   dd($cobro->medidor->contribuyente->nombres);
            flash('Operación enxitosa')->important();
        }

        else
            flash('Error')->important();

        $lecturas = Lecturacion::join('medidors', 'lecturacions.medidor_id','=','medidors.id')->
        join('contribuyentes','medidors.contribuyente_id','=','contribuyentes.id')->
        where('contribuyentes.ci','LIKE','%'.$request->ci.'%')->//paginate(10);

        select('lecturacions.id','contribuyentes.nombres','contribuyentes.apellidos','contribuyentes.ci','lecturacions.consumo','lecturacions.fecha_lectura','medidors.codigo','lecturacions.monto','medidors.categoria_id','lecturacions.estado_pago')->orderBy('id')->paginate(5);


        //return redirect()->route('cobro.index');
        return view('cobro.index')->with('cobros',$lecturas);
    }
}
