<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use function Illuminate\Support\enum_value;

class Casos extends Model
{
    use HasFactory;
    protected $table = 'casos';//tabla a la que se conecta el modelo

    
}
