<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function pengguna($id, $name)
    {
        return view('user')
            ->with('idUser', $id)
            ->with('userName',$name);
    }
}
