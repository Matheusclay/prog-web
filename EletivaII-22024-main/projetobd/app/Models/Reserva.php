<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = ['hospede_id', 'data_inicio', 'data_fim'];

    public function hospede()
    {
        return $this->belongsTo(Hospede::class);
    }
    public function estadias()
    {
        return $this->hasMany(Estadia::class);
    }
}
