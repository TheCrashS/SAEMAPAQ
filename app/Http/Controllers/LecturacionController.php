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
    }

    public function index()
    {
        return view('lecturacion.index');
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
