<?php

namespace App;

class Cart{

    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){

        if($oldCart){

            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;

        }
    }

    public function add($item, $id){

        $storedItem = ['qty'=>0, 'price'=>$item->price, 'item'=>$item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem=$this->items[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['price']=$item->price*$storedItem['qty'];
        $this->items[$id]=$storedItem;
        $this->totalQty++;
        $this->totalPrice+=$item->price;

}

    public function remove($item, $id){

        $storedItem=$this->items[$id];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                unset($this->items[$id]);
            }
        }

    
        $this->totalQty-=$storedItem['qty'];
        $this->totalPrice-=$storedItem['price'];

    }

    public function remove1($price, $id){
        
        $storedItem=$this->items[$id];
        $price=$storedItem['price']/$storedItem['qty'];
        $this->items[$id]['qty']-=1;
        if($this->items[$id]['qty']===0)
        {
            if(array_key_exists($id, $this->items)){
                unset($this->items[$id]);
            }}
        elseif($storedItem['qty']!=0)
        {
        $this->items[$id]['price']-=$price;
        $storedItem=$this->items[$id];}
        $this->totalQty-=1;
        $this->totalPrice-=$price;

    }


}