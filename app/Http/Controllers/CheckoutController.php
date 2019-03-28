<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Cart;
use Session;

class CheckoutController extends Controller
{
    public function index(){
        return view('clients/booking-review');
    }
    public function store( Request $request ){
        $distance = explode(" ", $request['distance']);
        $address = [];
        $arrayName = array(
            'address'   => $request['address'],
            'email'     => $request['email'],
            'firstname' => $request['firstname'],
            'lastname'  => $request['lastname'] ,
            'phone'     => [$request['phone1'], $request['phone2']],
            'distance'  => $distance[0]
        );

        array_push($address, $arrayName);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addaddress($address);

        $request->session()->put('cart', $cart);
        // return response()->json(['text' => Session::get('cart')]);
        return view('clients/booking-review', ['services' => Session::get('cart')->items['services'], 'cart' => Session::get('cart'), 'totalservice' => count(Session::get('cart')->items['services'])]);
    }
}
