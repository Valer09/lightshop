<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    public $totalWeight = 0;


    public function __construct($oldCart){
       if($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalWeight = $oldCart->totalWeight;
       }
    }

    public function add($item, $id, $quantity){
        $storedItem = ['qty' => (int)$quantity, 'price' => ($item->price * (int)$quantity), 'weight' => ((int)$item->weight * (int)$quantity), 'item' => $item];
        if($this->items){
            if(array_key_exists($item->id, $this->items)){
                $storedItem = null;
                $storedItem = $this->items[$id];
                $storedItem['qty'] += $quantity;
                $storedItem['weight'] = $item->weight * (int)$storedItem['qty'];
                $storedItem['price'] = $item->price * (int)$storedItem['qty'];
            }
        }
        $this->items[$id] = $storedItem; 
        $tot = 0;
        $quant = 0;
        $wei = 0;
        foreach($this->items as $item) {
            $tot += $item['price'];
            $quant += $item['qty'];
            $wei += $item['weight'];
        }
        $this->totalPrice = $tot;
        $this->totalQty = $quant;
        $this->totalWeight = $wei;
     }

     public function del($id){
        if($this->items){
            if(array_key_exists($id, $this->items)){
                unset($this->items[$id]);
            }
        }
        $tot = 0;
        $quant = 0;
        $wei = 0;
        foreach($this->items as $item) {
            $tot += $item['price'];
            $quant += $item['qty'];
            $wei += $item['weight'];
        }
        $this->totalPrice = $tot;
        $this->totalQty = $quant;
        $this->totalWeight = $wei;
     }

    public function decrease($item,$id){

        $storedItem=$this->items[$id];
        if ($storedItem['qty']>1) {
            $storedItem['qty']--;
            $storedItem['price'] = $item->price * $storedItem['qty'];
            $storedItem['weight'] = $item->weight * $storedItem['qty'];
            $this->items[$id] = $storedItem;
            $this->totalQty--;
            $this->totalPrice -= $item->price;
            $this->totalWeight -= $item->weight;
        }

    }

     public function increase($item,$id){
         $storedItem=$this->items[$id];
         $storedItem['qty']++;
         $storedItem['price']=$item->price * $storedItem['qty'];
         $storedItem['weight'] = $item->weight * $storedItem['qty'];
         $this->items[$id]=$storedItem;
         $this->totalQty++;
         $this->totalPrice +=$item->price;
         $this->totalWeight += $item->weight;
     }
}
