<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use App\Models\Hospede;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $reservas = Reserva::with('hospede')->get(); // Carrega as reservas com os dados dos hóspedes
    return view('reservas.index', compact('reservas'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $hospedes = Hospede::all(); // Lista de hóspedes
    return view('reservas.create', compact('hospedes'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'hospede_id' => 'required|exists:hospedes,id',
        'data_inicio' => 'required|date',
        'data_fim' => 'required|date|after_or_equal:data_inicio',
    ]);

    Reserva::create($request->all());
    return redirect()->route('reservas.index')->with('success', 'Reserva criada com sucesso!');
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
    $reserva = Reserva::findOrFail($id);
    $hospedes = Hospede::all(); // Lista de hóspedes
    return view('reservas.edit', compact('reserva', 'hospedes'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $reserva = Reserva::findOrFail($id);

    $request->validate([
        'hospede_id' => 'required|exists:hospedes,id',
        'data_inicio' => 'required|date',
        'data_fim' => 'required|date|after_or_equal:data_inicio',
    ]);

    $reserva->update($request->all());
    return redirect()->route('reservas.index')->with('success', 'Reserva atualizada com sucesso!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    $reserva = Reserva::findOrFail($id);
    $reserva->delete();
    return redirect()->route('reservas.index')->with('success', 'Reserva excluída com sucesso!');
    }

}
