<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return $users;
    }
    public function show($id){
        $users = User::find($id);
        return $users;
    }
    public function create(){
    $data = [
        'name' => 'Anika Tabassum',
        'email' => 'anika@gmail.com',
        'password' => '123456'
    ];
        User::create($data);
        return 'Create Successfully';
    }
    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return 'Delete';
    }
}
