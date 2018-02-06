<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;

class ShoppingCardController extends Controller
{
    /**
     * Sepetin içeriğini getirir.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Session::has('ShoppingCard')) {
            return view('shoppingcard.index');
        } else {
            $oldCart = Session::get('ShoppingCard');
            $cart = new Cart($oldCart);
            return view('shoppingcard.index',['products' => $cart->items, 'totalPrice' => $cart->cartTotalPrice]);
        }
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
     * Sepete eklenmek istenen ürün Session'a ekler.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function productAddCard(Request $request, $id)
    {
        //Eklenecek ürünün bilgisini alıyor.
        $product = Product::find($id);
        //Sepette eklenmiş ürün varsa, $oldCart değişkenimize atıyoruz
        $oldCart = Session::has('ShoppingCard') ? Session::get('ShoppingCard') : null;
        //Yeni bir Cart nesnesi türetiyoruz
        $cart = new Cart($oldCart);
        //$cart nesnemize, yeni ürünümüzü ekliyoruz
        $cart->add($product,$product->id);
        //Mevcutta olanlar ile($oldCart olanlar), yeni eklenecek ürün ile birleştirip ShoppingCard Session'a ekliyoruz
        $request->session()->put('ShoppingCard',$cart);
        
        return redirect('shoppingCard/');
    }

    /**
     * Sepette ki ürünü bir azaltır. Bir tane kalınca, azaltıldığında sepetten kaldırır.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function productDecrease(Request $request,$id)
    {
        //Eklenecek ürünün bilgisini alıyor.
        $product = Product::find($id);
        //Sepette eklenmiş ürün varsa, $oldCart değişkenimize atıyoruz
        $oldCart = Session::has('ShoppingCard') ? Session::get('ShoppingCard') : null;
        //Yeni bir Cart nesnesi türetiyoruz
        $cart = new Cart($oldCart);
        //$cart nesnemize, ürünü bir azaltıyoruz
        $cart->decrease($product,$product->id);
        //Mevcutta olanlar ile($oldCart olanlar), yeni eklenecek ürün ile birleştirip ShoppingCard Session'a ekliyoruz
        $request->session()->put('ShoppingCard',$cart);

        return redirect('shoppingCard');
    }

}
