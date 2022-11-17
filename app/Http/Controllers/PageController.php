<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class PageController extends Controller
{
    public function home(){
        return view('users.index');
    }

    public function users(){
        $users = Usuario::latest()->paginate();
        return view('users.users',['users' => $users]);
    }

    public function user(Usuario $user){
        return view('user',['user' => $user]);
    }

    

}
