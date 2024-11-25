<?php

namespace App\Http\Controllers;

use App\Models\Quarto;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class GraficoController extends Controller
{
    public function ocupacao()
{
    $quartosTotais = Quarto::count();
    $quartosReservados = Reserva::whereDate('data_inicio', '<=', now())
                                 ->whereDate('data_fim', '>=', now())
                                 ->count();
    $quartosDisponiveis = $quartosTotais - $quartosReservados;

    dd($quartosReservados, $quartosDisponiveis);

    return view('grafico.ocupacao', compact('quartosReservados', 'quartosDisponiveis'));
}

}

