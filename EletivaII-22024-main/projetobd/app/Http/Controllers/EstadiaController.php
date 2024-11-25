<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estadia;
use App\Models\Quarto;
use App\Models\Reserva;

class EstadiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $estadias = Estadia::with(['quarto', 'reserva'])->get();
    return view('estadias.index', compact('estadias'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $quartos = Quarto::all(); // Lista de quartos disponíveis
    $reservas = Reserva::all(); // Lista de reservas disponíveis
    return view('estadias.create', compact('quartos', 'reservas'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'quarto_id' => 'required|exists:quartos,id',
        'reserva_id' => 'required|exists:reservas,id',
    ]);

    Estadia::create($request->all());
    return redirect()->route('estadias.index')->with('success', 'Estadia registrada com sucesso!');
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
    $estadia = Estadia::findOrFail($id);
    $quartos = Quarto::all(); // Lista de quartos disponíveis
    $reservas = Reserva::all(); // Lista de reservas disponíveis
    return view('estadias.edit', compact('estadia', 'quartos', 'reservas'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $estadia = Estadia::findOrFail($id);

    $request->validate([
        'quarto_id' => 'required|exists:quartos,id',
        'reserva_id' => 'required|exists:reservas,id',
    ]);

    $estadia->update($request->all());
    return redirect()->route('estadias.index')->with('success', 'Estadia atualizada com sucesso!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $estadia = Estadia::findOrFail($id);
    $estadia->delete();
    return redirect()->route('estadias.index')->with('success', 'Estadia excluída com sucesso!');
}

}
