<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Products $model)
    {
       return response()->json(["data" => $model->all()]);
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
        $producto =new Productos();
        $producto-> id = null;
        $producto-> nombre = $request->nombre;
        $producto-> precio = $request->precio;
        $producto-> cantidad = $request->cantidad;
        $producto-> observaciones = $request->observaciones;

        $producto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $producto =  Productos::findOrFail($request->id);
        $producto-> nombre = $request->nombre;
        $producto-> precio = $request->precio;
        $producto-> cantidad = $request->cantidad;
        $producto-> observaciones = $request->observaciones;

        $producto->save();
        return $producto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $producto = Productos::destroy($request->id);
        return $producto;
    }
}
