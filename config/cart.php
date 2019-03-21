<?php

namespace app;

class cart{

    public $items = null;
    public $totalbuyed=0;
    public $totalprice=0;

    public function __construct($oldcart)
    {
          if ($oldcart) {

              $this->items=$oldcart->items;
              $this->totalbuyed=$oldcart->items;
              $this->totalprice=$oldcart->items;
          }
    }

    public function add($item,$id){
        $storeditem =['total'=>0, 'price' =>$item->price, 'item'=>$item];
        if ($this->items) {
            if (array_key_exists($id,$this->items)){
                $storeditem= $this->items[$id];

            }
        }
        $storeditem['total']++;
        $storeditem['price'] =$item-> price * $storeditem['total'];
        $this->items[$id]=$storeditem;
        $this->totalbuyed++;
        $this->totalprice += $item->price;
    }
}
