<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodBeverageController extends Controller
{
    public function produk(){
        return view('food-beverage')
        ->with('jual','Menjual Berbagai Produk Makanan dan Minuman' );
    }
}
