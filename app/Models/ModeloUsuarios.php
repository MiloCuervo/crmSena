<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloUsuarios extends Model
{
    use HasFactory;
    protected $table = 'usuarios';//tabla a la que se conecta el modelo
}
