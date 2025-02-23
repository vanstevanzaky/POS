<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCareController extends Controller
{
    public function produk(){
        return view('home-care')
        ->with('jual','Menjual Berbagai Produk Kebersihan Rumah' );
    }
}
