<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivos extends Model
{
    protected $table= 'dispositivos';
    /** @use HasFactory<\Database\Factories\DispositivosFactory> */

    use HasFactory;
    
protected $fillable=[
    'nombre',
    'descripcion',
    'modelo_de_dispositivo',
    'numero_de_serie',
    'fabricante',
    'marca',


];
    
    
}
