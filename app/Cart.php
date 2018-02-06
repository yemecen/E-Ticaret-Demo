<?php

namespace App;

use Session;

class Cart 
{
	public $items = null;
	public $cartTotalQuantity = 0;
	public $cartTotalPrice = 0;

	public function __construct($oldCart)
	{
		if ($oldCart) {
		    $this->items = $oldCart->items;	
		    $this->cartTotalQuantity = $oldCart->cartTotalQuantity;	
		    $this->cartTotalPrice = $oldCart->cartTotalPrice;	
		}
	}

	/*
	** Yeni eklenecek ürün, array de var ise miktar ve price arttırılır.
	** Yoksa array'e eklenir.  
	**
	*/
	public function add($item,$id)
	{
	    $storedItem = ['quantity' => 0, 'price' => $item->price, 'item' => $item];
	    
	    if ($this->items) {
	    	if (array_key_exists($id, $this->items)) {
	    		$storedItem = $this->items[$id];
	    	}
	    }

	    $storedItem['quantity']++;
	    $storedItem['price'] = $item->price * $storedItem['quantity'];
	    $this->items[$id] = $storedItem;
	    $this->cartTotalQuantity++;
	    $this->cartTotalPrice += $item->price;    	
	}

	/*
	** Sepetde ki ürünü bir azaltır 
	**
	*/
	public function decrease($item,$id)
	{
		$storedItem = ['quantity' => 0, 'price' => $item->price, 'item' => $item];
	    
		if ($this->items) {
	    	if (array_key_exists($id, $this->items)) {
	    		$storedItem = $this->items[$id];
	    	}
	    }

	    //Sepette azaltma yapılırken, miktar 1 olduğunda azaltmak istenirse ürün sepetten silinir.
	    if ($storedItem['quantity'] == 1){
	    	
	    	unset($this->items[$id]);

	    	if (count($this->items) == 0){
	    		$this->cartTotalQuantity = 0;
		    	$this->cartTotalPrice = 0;	
	    	}
	    	
	    } else {
	        $storedItem['quantity']--;
		    $storedItem['price'] = $item->price * $storedItem['quantity'];
		    $this->items[$id] = $storedItem;
		    $this->cartTotalQuantity--;
		    $this->cartTotalPrice -= $item->price;		
	    }	
	        	
	}
}