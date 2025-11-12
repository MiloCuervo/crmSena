<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Testing\Fluent\Concerns\Has; 

class base extends Model
{
    use HasFactory;
    protected $table = 'usuarios';//tabla a la que se conecta el modelo

    protected function nombre(): Attribute
    {
        return new Attribute( /* mutador de atributos a minusculas */
            set: fn ($value) => strtolower($value),
        );
    }
}
