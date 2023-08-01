<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function new(){
        return view('landingpage.index');
    }

    public function test2(){
        return view('test2.index');
    }

}
