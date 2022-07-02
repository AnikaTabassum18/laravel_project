<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data = [];
        $data['name'] = "Anika Tabassum";
        $data['roll'] = 20;
        $data['Subjects'] = ['Math', 'English','Bangla'];      
        return view('home.index',$data );
    }
}
