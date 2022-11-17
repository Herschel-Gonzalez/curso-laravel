<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = "usuarios";
    protected $fillable = ['id','nombre','paterno','materno','edad','fecha_nacimiento',
    'genero','usuario','password'];
}
