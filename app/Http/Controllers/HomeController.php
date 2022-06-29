<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $name = "Anika Tabassum";
        $data = [
            'name' => $name
        ];
        return view('home.index',$data );
    }
}
