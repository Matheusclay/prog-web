<?php

namespace App\Http\Controllers;

use App\Models\quartos;
use Illuminate\Http\Request;

class QuartosController extends Controller
{
    public function index()
    {
        $quartos = quartos::all();
        return view("quartos.index", compact('quartos'));
    }

    public function create()
    {
        return view("quartos.create");
    }

    public function store(Request $request)
    {
        quartos::create($request->all());
        return redirect("/quarto");
    }
}
