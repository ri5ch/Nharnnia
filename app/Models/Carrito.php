<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function prendas()
    {
        return $this->belongsToMany(Prenda::class, 'carrito_prenda', 'carrito_id', 'prenda_id')->withTimestamps();
    }
}
