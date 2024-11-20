<?php

namespace App\Http\Controllers;

use App\Models\Quarto;
use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $reservas = Reserva::with('quarto')->get();
    return view('reservas.index', compact('reservas'));
    }


    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
    $quartos = Quarto::all(); // Lista de quartos disponíveis
    return view('reservas.create', compact('quartos'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'quarto_id' => 'required|exists:quartos,id',
        'nome_hospede' => 'required|string|max:255',
        'data_entrada' => 'required|date',
        'data_saida' => 'required|date|after_or_equal:data_entrada',
    ]);

    Reserva::create($request->all());
    return redirect('/reserva')->with('success', 'Reserva criada com sucesso!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reserva = Reserva::findOrFail($id); // Busca a reserva pelo ID
        $quartos = Quarto::all(); // Lista de quartos disponíveis
        return view('reservas.edit', compact('reserva', 'quartos'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    $request->validate([
        'quarto_id' => 'required|exists:quartos,id',
        'nome_hospede' => 'required|string|max:255',
        'data_entrada' => 'required|date',
        'data_saida' => 'required|date|after_or_equal:data_entrada',
    ]);

    $reserva = Reserva::findOrFail($id);
    $reserva->update($request->all()); // Atualiza os dados
    return redirect('/reserva')->with('success', 'Reserva atualizada com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {   
    $reserva = Reserva::findOrFail($id);
    $reserva->delete(); // Exclui a reserva
    return redirect('/reserva')->with('success', 'Reserva excluída com sucesso!');
    }

}
