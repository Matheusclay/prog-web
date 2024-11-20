<?php

namespace App\Http\Controllers;

use App\Models\Quarto;
use App\Models\quartos;
use Illuminate\Http\Request;

class QuartosController extends Controller
{
    public function index()
    {
        $quartos = Quarto::all();
        return view("quartos.index", compact('quartos'));
    }

    public function create()
    {
        return view("quartos.create");
    }

    public function edit($id)
    {
        $quarto = Quarto::findOrFail($id);
        return view("quartos.edit", compact('quarto'));
    }

    public function update(Request $request, $id)
    {
    $quarto = Quarto::findOrFail($id);

    // Atualizando os campos do quarto com os novos valores
    $quarto->numero = $request->numero;
    $quarto->andar = $request->andar;
    $quarto->descricao = $request->descricao;

    $quarto->save();

    return redirect('/quarto')->with('success', 'Quarto atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $quarto = Quarto::findOrFail($id);
        $quarto->delete();
        return redirect('/quarto')->with('success', 'Quarto deletado com sucesso!');
    }

    public function store(Request $request)
    {
        Quarto::create($request->all());
        return redirect("/quarto");
    }
}
