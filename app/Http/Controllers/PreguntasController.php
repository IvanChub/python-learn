<?php

namespace App\Http\Controllers;

use App\Models\preguntas;
use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/administrador');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/adminPreguntas');
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
     * @param  \App\Models\preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function show(preguntas $preguntas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function edit(preguntas $preguntas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, preguntas $preguntas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function destroy(preguntas $preguntas)
    {
        //
    }
}
