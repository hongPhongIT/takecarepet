<?php

namespace App;

class Cart {

    public $items;
    public $pet;
    public $address;
    public $shipping = 0;
    public $tax = 0;
    public $totalservice = 0;
    public $total = 0;

    public function __construct($oldCart) {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->pet = $oldCart->pet;
            $this->total = $oldCart->total;
            $this->totalservice = $oldCart->totalservice;
        } else {
            $this->items = null;
        }
    }
    
    public function add($service, $infopet, $date, $time) {
        $length = count($service);
        $item = [];
        for($i = 0 ; $i < $length ; $i++){
           $item[$service[$i]['id']] = $service[$i];
           $this->totalservice += $service[$i]['price'];
        }
        $storedItem = ['services' => $item];

        // if ($this->items) {
        //     if (array_key_exists($id, $this->items)) {
        //         $storedItem = $this->items[$id];
        //     }
        // }
        $this->items = $storedItem;
        $this->pet = $infopet;
        $this->date = $date;
        $this->time = $time;
    }
    public function addaddress( $address ) {
        $this->total = 0;
        if ($address[0]['distance'] <= 1){
            $this->shipping = 0;
        } else if($address[0]['distance'] >1 && $address[0]['distance'] <= 4){
            $this->shipping = 20;
        }
        else if($address[0]['distance'] >4 && $address[0]['distance'] <= 6){
            $this->shipping = 25;
        }
        else if($address[0]['distance'] >6 && $address[0]['distance'] <= 8){
            $this->shipping = 30;
        }
        else if($address[0]['distance'] >8 && $address[0]['distance'] <= 10){
            $this->shipping = 35;
        }
        else if($address[0]['distance'] >10 && $address[0]['distance'] <= 12){
            $this->shipping = 35;
        }
        else if($address[0]['distance'] >12){
            $this->shipping = 40;
        }
        $this->address = $address;
        $this->total = $this->shipping+ $this->totalservice;
    }
}