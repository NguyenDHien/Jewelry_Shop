<?php

namespace App\Models;

class cart
{
    public $items = [];
    public $totalItems = 0;
    public $totalPrice = 0;

    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];
    }
    public function addItem($prod, $quantity = 1)
    {
        if (isset($this->items[$prod->id])) {
            $this->items[$prod->id]['quantity'] += $quantity;
        } else {
            $priceFinal = $prod->price - (($prod->price * $prod->discount) / 100);
            $item = [
                'id' => $prod->id,
                'image' => $prod->image,
                'name' => $prod->name,
                'price' => $priceFinal,
                'quantity' => $quantity,
            ];
            $this->items[$prod->id] = $item;
        }


        session(['cart' => $this->items]);
        // dd($this->items);
    }
    public function updateItem($quantity)
    {
        // dd($quantity, $this->items);
        foreach ($quantity as $id => $value) {
            foreach ($this->items as $value2) {
                if (isset($this->items[$id]) && $id == $value2['id']) {
                    $this->items[$id]['quantity'] = $value > 0 ? ceil((int)$value) : 1;
                }
            }
        }
        session(['cart' => $this->items]);
        // if (isset($this->items[$id])) {
        //     $quantity = $quantity > 0 ? ceil((int)$quantity) : 1;
        //     $quantity = $quantity <= 10 ? ceil((int)$quantity) : 10;
        //     $this->items[$id]['quantity'] = $quantity;
        //     
        // }
    }
    public function removeItem($id)
    {
        if (isset($this->items[$id])) {
            unset($this->items[$id]);
            session(['cart' => $this->items]);
        }
    }
    public function removeAll()
    {
        session(['cart' => []]);
    }
}
