<?php

namespace App\Http\Controllers;

use App\Contribuyente;
use Illuminate\Http\Request;

class ContribuyenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //
        $contris = Contribuyente::where('nombres','LIKE','%'.$request->nombres.'%')->orderBy('id','ASC')->paginate(10);
        return view('contribuyente.index')->with('contris',$contris);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        /* $table->string('nombres');
        $table->string('apellidos');
        $table->integer('ci');
        $table->dateTime('fecha_nac');
        $table->integer('telefono');
        $table->string('direccion');
        $table->boolean('estado')->default(true); */

        return view('contribuyente.create');
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
     * @param  \App\Contribuyente  $contribuyente
     * @return \Illuminate\Http\Response
     */
    public function show(Contribuyente $contribuyente)
    {
        //
        return view('contribuyente.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contribuyente  $contribuyente
     * @return \Illuminate\Http\Response
     */
    public function edit(Contribuyente $contribuyente)
    {
        //
        //$contri = $contribuyente;  //test1
        $contri = Contribuyente::find($contribuyente->id);  //test2

        return view('contribuyente.edit')->with('contri',$contri);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contribuyente  $contribuyente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contribuyente $contribuyente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contribuyente  $contribuyente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contribuyente $contribuyente)
    {
        //
    }
}
