<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadia extends Model
{
    use HasFactory;

    protected $fillable = ['quarto_id', 'reserva_id'];

    // Relacionamento com Quarto
    public function quarto()
    {
        return $this->belongsTo(Quarto::class);
    }

    // Relacionamento com Reserva
    public function reserva()
    {
        return $this->belongsTo(Reserva::class);
    }
}

