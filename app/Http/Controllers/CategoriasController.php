<?php

namespace App\Http\Controllers;

use App\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorias=Categorias::orderby('id_catpreg')->get();
        return view("categorias.index", compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("categorias.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria=array('nom_cat'=>$request->desc_categoria);
        Categorias::create($categoria);
        return redirect("categorias");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorias_preguntas  $categorias_preguntas
     * @return \Illuminate\Http\Response
     */
    public function show(Categorias_preguntas $categorias_preguntas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorias_preguntas  $categorias_preguntas
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorias_preguntas $categorias_preguntas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorias_preguntas  $categorias_preguntas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorias_preguntas $categorias_preguntas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorias_preguntas  $categorias_preguntas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorias_preguntas $categorias_preguntas)
    {
        //
    }
}
