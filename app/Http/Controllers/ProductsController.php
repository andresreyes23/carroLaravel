<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = products::all();
        return $products;
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = products::created($request->all());
        return $products;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produc = products::findorfail($id);
        $produc->nombre = $request->nombre;
        $produc->sku = $request->sku;
        $produc->descripcion = $request->descripcion;
        $produc->update();
        return $produc;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produc = products::findorfail($id);
        $produc->delete();
    }
}
