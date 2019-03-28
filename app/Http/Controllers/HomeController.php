<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $service = Service::select('*')->get();
        return view('/clients/home', ['services' => $service]);
    }
    public function serviceindex() {
        $service = Service::select('*')->get();
        return view('/clients/service', ['services' => $service]);
    }
    public function servicedetail( $name ) {
        $service = Service::select('*')->where('name', $name)->get();
        return view('/clients/service-detail', ['service' => $service]);
    }

    public function getCheckoutSteps( Request $request ) {
        return response()->json(['steps' => $request->step, 'content' => $request->content, 'title' => $request->title]);
    }
}
