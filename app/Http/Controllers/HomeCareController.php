<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCareController extends Controller
{
    public function produk(){
        return view('category.home-care')
        ->with('jual','Menjual Berbagai Produk Kebersihan Rumah' );
    }
}
