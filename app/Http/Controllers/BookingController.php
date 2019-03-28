<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeneaLabs\LaravelMaps\Facades\Map;
use App\Service;
use App\Cart;
use Session;

class BookingController extends Controller
{
    public function index() {
        $service = Service::select('*')->get();
        return view('clients/booking',['services' => $service]);
    }
    public function indexaddress() {
        return view('clients/booking-address');
}

    public function store(Request $request) {
            if(!isset($request['1']) && !isset($request['2']) && !isset($request['3']) && !isset($request['4'])){
                $this->validate($request, [
                    'service' => 'required',
                ]);
            }
            if($request['date']== null){
                $this->validate($request, [
                    'datetime' => 'required',
                ]);
            }
            if($request['time']== null){
                $this->validate($request, [
                    'datetime' => 'required',
                ]);
            }
            $infopet = [];
            $arrayName = array(
                            'kind'   => $request['kindofpet'],
                            'age'    => $request['age'],
                            'name'   => $request['petname'],
                            'hobies' => $request['pethobbies'] 
                        );
    
            array_push($infopet, $arrayName);
            $service = Service::select('*')->whereIn('id', $request['service'])->get();
    
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->add($service, $infopet, $request->date, $request->time);
    
            $request->session()->put('cart', $cart);
            
            return view('clients/booking-address',['address' =>'done']);
    }
}
