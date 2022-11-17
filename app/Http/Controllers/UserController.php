<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class UserController extends Controller
{
    public function create(){
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'paterno' => 'required',
            'materno' => 'required',
            'edad' => 'required',
            'fecha' => 'required',
            'genero' => 'required',
            'correo' => 'required',
            'password' => 'required',
        ]);

        $data = $request -> all();
        dd($data);
        Usuario::create(['nombre'=>$data['nombre'],'paterno'=>$data['paterno'],'materno'=>$data['materno'],'edad'=>$data['edad'],'fecha_nacimiento'=>$data['fecha_nacimiento'],
        'genero'=>$data['genero'],'correo'=>$data['correo'],'password'=>$data['password']]);

        return redirect('/');
    }

}
