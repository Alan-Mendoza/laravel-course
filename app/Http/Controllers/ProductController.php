<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = DB::table('products')->get(); // Obtener absolutamente todo
        // dd($products);
        $products = Product::all(); // Eloquent
        // return $products;
        return view('products.index')->with([
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'This is the form to create a product';
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        // $product = DB::table('products')->where('id', $product)->get(); // Este get nos da la coleccion
        // $product = DB::table('products')->where('id', $product)->first(); // Este first nos devuelve uno
        // $product = DB::table('products')->find($product); // Este no requiere de first ni de where pero si tenemos un product 1 pero no el 2, nos dara null por el dos

        // $product = Product::find($product); // Eloquent, con find me retorna null si el producto no existe
        $product = Product::findOrFail($product); // Eloquent, si es nulo error 404 no se encontro
        // dd($product);
        return view('products.show')->with([
            'product' => $product,
            // 'html' => "<h2>Hola</h2>",
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        return "Showing the form to edit the product whith id {$product}";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        //
    }
}
