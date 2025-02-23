<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BabyKidController extends Controller
{
    public function produk(){
        return view('category.baby-kid')
        ->with('jual', 'Menjual Berbagai Produk Baby');
    }
}
