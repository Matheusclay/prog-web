<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quartos extends Model
{
    use HasFactory;
    protected $fillable = ['numero', 'andar', 'descricao'];
}
