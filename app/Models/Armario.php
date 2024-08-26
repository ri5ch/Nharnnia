<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armario extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id'];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function prendas()
    {
        return $this->belongsToMany(Prenda::class)->withTimestamps();
    }
}
