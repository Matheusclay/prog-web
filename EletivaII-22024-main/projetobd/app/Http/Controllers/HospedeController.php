<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospede;

class HospedeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $hospedes = Hospede::all();
    return view('hospedes.index', compact('hospedes'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('hospedes.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email|unique:hospedes',
        'telefone' => 'nullable|string|max:20',
    ]);

    Hospede::create($request->all());
    return redirect()->route('hospedes.index')->with('success', 'Hóspede cadastrado com sucesso!');
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
    $hospede = Hospede::findOrFail($id);
    return view('hospedes.edit', compact('hospede'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $hospede = Hospede::findOrFail($id);

    $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email|unique:hospedes,email,'.$hospede->id,
        'telefone' => 'nullable|string|max:20',
    ]);

    $hospede->update($request->all());
    return redirect()->route('hospedes.index')->with('success', 'Hóspede atualizado com sucesso!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $hospede = Hospede::findOrFail($id);
    $hospede->delete();
    return redirect()->route('hospedes.index')->with('success', 'Hóspede excluído com sucesso!');
}

}
