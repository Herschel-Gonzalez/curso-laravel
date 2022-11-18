<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    public function home(){
        return view('users.index');
    }

    public function users(){
        $users = User::latest()->paginate();
        return view('users.users',['users' => $users]);
    }

    public function user(User $user){
        return view('user',['user' => $user]);
    }

    

}
