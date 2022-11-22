<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\User;


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

    public function update(Request $request){
        $user= User::find($request->user_id);
        $user->name = $request->nombre;
        $user->paterno = $request->paterno;
        $user->materno = $request->materno;
        $user->edad = $request->edad;
        $user->fecha_nacimiento = $request->fecha_nacimiento;
        $user->genero = $request->genero;
        $user->email = $request->email;
        $user->password = $user->password;
        $user->save();
        return redirect('users');
    }

    public function delete($userid){
        $user = User::find($userid);
        $user->delete();
       return redirect('users');
    }

}
