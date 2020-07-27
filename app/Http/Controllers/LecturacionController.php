<?php

namespace App\Http\Controllers;

use App\Lecturacion;
use Illuminate\Http\Request;

class LecturacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $redirectTo = '/home';
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lecturacion');
    }

    public function index(Request $request)
    {
        /* $lecturas = Lecturacion::join('lecturacion.medidor_id','=','medidor.medidor_id')->
        join('medidor.contribuyente_id','=','contribuyente.contribuyente_id')->
        select('contribuyente.id','contribuyente.nombres','contribuyente.apellidos','contribuyente.ci','lectura.consumo'); */
        return view('lecturacion.index');//->with('cobros',$lecturas);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lecturacion  $lecturacion
     * @return \Illuminate\Http\Response
     */
    public function show(Lecturacion $lecturacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lecturacion  $lecturacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecturacion $lecturacion)
    {
        //
        return view('lecturacion.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lecturacion  $lecturacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecturacion $lecturacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lecturacion  $lecturacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecturacion $lecturacion)
    {
        //
    }
}
