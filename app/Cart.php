<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;


    public function __construct($oldCart){
       if($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
       }
    }

    public function add($item, $id, $quantity){
        $storedItem = ['qty' => (int)$quantity, 'price' => ($item->price * (int)$quantity), 'item' => $item];
        if($this->items){
            if(array_key_exists($item->id, $this->items)){
                $storedItem = null;
                $storedItem = $this->items[$id];
                $storedItem['qty'] += $quantity;
                $storedItem['price'] = $item->price * (int)$storedItem['qty'];
            }
        }
        $this->items[$id] = $storedItem; 
        $tot = 0;
        $quant = 0;
        foreach($this->items as $item) {
            $tot += $item['price'];
            $quant += $item['qty'];
        }
        $this->totalPrice = $tot;
        $this->totalQty = $quant;

     }

     public function del($id){
        if($this->items){
            if(array_key_exists($id, $this->items)){
                unset($this->items[$id]);
            }
        }
        $tot = 0;
        $quant = 0;
        foreach($this->items as $item) {
            $tot += $item['price'];
            $quant += $item['qty'];
        }
        $this->totalPrice = $tot;
        $this->totalQty = $quant;

     }

    public function decrease($item,$id){

        $storedItem=$this->items[$id];
        $storedItem['qty']--;
        $storedItem['price']=$item->price * $storedItem['qty'];
        $this->items[$id]=$storedItem;
        $this->totalQty--;
        $this->totalPrice -=$item->price;


    }

     public function increase($item,$id){

         $storedItem=$this->items[$id];
         $storedItem['qty']++;
         $storedItem['price']=$item->price * $storedItem['qty'];
         $this->items[$id]=$storedItem;
         $this->totalQty++;
         $this->totalPrice +=$item->price;


     }
}
