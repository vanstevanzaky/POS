<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeautyHealthController extends Controller
{
    public function produk()
    {
        return view('category.beauty-health')
            ->with('jual', 'Menjual Berbagai Produk Kecantikan');
    }
}
