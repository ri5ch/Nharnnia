<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'estilo',
        'color1',
        'color2',
        'imagen',
        'tipo',
        'precio',
        'genero',
    ];

    public function armarios()
    {
        return $this->belongsToMany(Armario::class);
    }

    public function carritos()
    {
        return $this->belongsToMany(Carrito::class);
    }

    public function outfits()
    {
        return $this->belongsToMany(Outfit::class);
    }
}
