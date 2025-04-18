<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Jugador;


class Equip extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'categoria', 'entrenador_id'];

    // Relación: un equipo pertenece a un entrenador (usuario)
    public function entrenador()
    {
        return $this->belongsTo(User::class, 'entrenador_id');
    }

    // Relación: un equipo tiene muchos jugadores
    public function jugadors()
    {
        return $this->hasMany(Jugador::class);
    }
}
