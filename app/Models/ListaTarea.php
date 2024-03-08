<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaTarea extends Model
{
    use HasFactory;
    protected $table = 'lista_tareas';
    protected $fillable = ['nombre','descripcion'];
}
