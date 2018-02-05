<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Tüm ürünleri çağırıyoruz.
        $product = Product::all();
        //View'a gönderiyoruz.
        return view('product.index')->withProduct($product);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Detayı gösterilecek ürünün ID'sine göre ürünü çağırıyoruz 
        $product = Product::where('id',$id)->first();
        //Ürün Detay view'ı
        return view('product.show')->withProduct($product);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Ürünleri isme göre sıralar.
     *
     * @return \Illuminate\Http\Response
     */
    public function orderByName()
    {
        //Ürünleri isme göre sıralıyoruz
        $product = Product::orderBy('name')->get();

        return view('product.index')->withProduct($product);
    }

    /**
     * Ürünleri fiyatına göre sıralar.
     *
     * @return \Illuminate\Http\Response
     */
    public function orderByPrice()
    {
        //Ürünleri fiyata göre sıralar
        $product = Product::orderBy('price','asc')->get();

        return view('product.index')->withProduct($product);
    }
}
