<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Quarto;
use App\Models\Reserva;


class DashboardController extends Controller
{
    public function ocupacao()
{
    $quartosTotais = Quarto::count();
    $quartosReservados = Reserva::whereDate('data_entrada', '<=', now())
                                 ->whereDate('data_saida', '>=', now())
                                 ->count();
    $quartosDisponiveis = $quartosTotais - $quartosReservados;

    $dadosGrafico = json_encode([$quartosReservados, $quartosDisponiveis]);

    return view('ocupacao', compact('dadosGrafico'));
}



}
