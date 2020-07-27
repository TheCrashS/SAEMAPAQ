<?php

namespace App\Http\Controllers;

use App\Medidor;
use Illuminate\Http\Request;

class MedidorController extends Controller
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
        $this->middleware('medidor');
    }

    public function index(Request $request)
    {
        //
        $medidor = Medidor::where('codigo','LIKE','%'.$request->codigo.'%')->orderBy('id','ASC')->paginate(10);

        return view('medidor.index')->with('contris',$medidor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('medidor.create');
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
     * @param  \App\Medidor  $medidor
     * @return \Illuminate\Http\Response
     */
    public function show(Medidor $medidor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medidor  $medidor
     * @return \Illuminate\Http\Response
     */
    public function edit(Medidor $medidor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medidor  $medidor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medidor $medidor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medidor  $medidor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medidor $medidor)
    {
        //
    }
}
