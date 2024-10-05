<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function mostrarExer1(){
        return view("exer1");
    }

    public function calcularExer1(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }
    public function mostrarEx02()
    {
        return view("exer2");
    }
    public function calcularEx02(Request $request)
    {
        $valor1 = (int)$request->input('val01');
        $valor2 = (int)$request->input('val02');
        return $valor1 - $valor2;
    }

    public function mostrarExercicio3()
    {
        return view('exercicio3');
    }
    public function calcularExercicio3(Request $request)
{
    $valor1 = (int)$request->input("valor1");
    $valor2 = (int)$request->input("valor2");

    $resultado = $valor1 * $valor2;

    return view('exercicio3', ['resultado' => $resultado]);
}

    public function mostrarExercicio4()
    {
        return view('exercicio4');
    }

    public function calcularExercicio4(Request $request)
{
    $numero1 = (float)$request->input("numero1");
    $numero2 = (float)$request->input("numero2");

    if ($numero2 == 0) {
        $resultado = "Divisão por zero não é permitida.";
    } else {
        $resultado = $numero1 / $numero2;
    }

    return view('exercicio4', ['resultado' => $resultado]);
}
    public function mostrarExercicio5()
    {
        return view('exercicio5');
    }

    public function calcularExercicio5(Request $request)
{
    $nota1 = (float)$request->input("nota1");
    $nota2 = (float)$request->input("nota2");
    $nota3 = (float)$request->input("nota3");

    $media = ($nota1 + $nota2 + $nota3) / 3;

    return view('exercicio5', ['media' => $media]);
}

    public function mostrarExercicio6()
    {
        return view('exercicio6');
    }

    public function calcularExercicio6(Request $request)
{
    $celsius = (float)$request->input("temperatura");

    $fahrenheit = ($celsius * 9/5) + 32;

    return view('exercicio6', ['fahrenheit' => $fahrenheit]);
}

    public function mostrarExercicio7()
    {
        return view('exercicio7');
    }

    public function calcularExercicio7(Request $request)
{
    $fahrenheit = (float)$request->input("temperatura");

    $celsius = ($fahrenheit - 32) * 5/9;

    return view('exercicio7', ['celsius' => $celsius]);
}

    public function mostrarExercicio8()
    {
        return view('exercicio8');
    }

    public function calcularExercicio8(Request $request)
{
    $largura = (float)$request->input("largura");
    $altura = (float)$request->input("altura");

    $area = $largura * $altura;

    return view('exercicio8', ['area' => $area]);
}

    public function mostrarExercicio9()
    {
        return view('exercicio9');
    }

    public function calcularExercicio9(Request $request)
{
    $raio = (float)$request->input("raio");

    $area = pi() * pow($raio, 2);

    return view('exercicio9', ['area' => $area]);
}

    public function mostrarExercicio10()
    {
        return view('exercicio10');
    }

    public function calcularExercicio10(Request $request)
{
    $largura = (float)$request->input("largura");
    $altura = (float)$request->input("altura");

    $perimetro = 2 * ($largura + $altura);

    return view('exercicio10', ['perimetro' => $perimetro]);
}

    public function mostrarExercicio11()
    {
        return view('exercicio11');
    }

    public function calcularExercicio11(Request $request)
    {
    $raio = (float)$request->input("raio");

    $perimetro = 2 * pi() * $raio;

    return view('exercicio11', ['perimetro' => $perimetro]);
}

    public function mostrarExercicio12()
    {
        return view('exercicio12');
    }

    public function calcularExercicio12(Request $request)
{
    $base = (float)$request->input("base");
    $expoente = (float)$request->input("expoente");

    $resultado = pow($base, $expoente);

    return view('exercicio12', ['resultado' => $resultado]);
}

    public function mostrarExercicio13()
    {
        return view('exercicio13');
    }

    public function calcularExercicio13(Request $request)
{
    $metros = (float)$request->input("metros");

    $centimetros = $metros * 100;

    return view('exercicio13', ['centimetros' => $centimetros]);
}

    public function mostrarExercicio14()
    {
        return view('exercicio14');
    }

    public function calcularExercicio14(Request $request)
{
    $quilometros = (float)$request->input("quilometros");

    $milhas = $quilometros * 0.621371;

    return view('exercicio14', ['milhas' => $milhas]);
}

    public function mostrarExercicio15()
    {
        return view('exercicio15');
    }

    public function calcularExercicio15(Request $request)
{
    $peso = (float)$request->input("peso");
    $altura = (float)$request->input("altura");

    $imc = $peso / ($altura * $altura);

    return view('exercicio15', ['imc' => $imc]);
}

    public function mostrarExercicio16()
    {
        return view('exercicio16');
    }

    public function calcularExercicio16(Request $request)
{
    $preco = (float)$request->input("preco");
    $percentualDesconto = (float)$request->input("percentual_desconto");

    $desconto = $preco * ($percentualDesconto / 100);
    $precoComDesconto = $preco - $desconto;

    return view('exercicio16', ['precoComDesconto' => $precoComDesconto]);
}


    public function mostrarExercicio17()
    {
        return view('exercicio17');
    }

    public function calcularExercicio17(Request $request)
{
    $capital = (float)$request->input("capital");
    $taxa = (float)$request->input("taxa");
    $periodo = (float)$request->input("periodo");

    $jurosSimples = $capital * ($taxa / 100) * $periodo;

    return view('exercicio17', ['jurosSimples' => $jurosSimples]);
}

    public function mostrarExercicio18()
    {
        return view('exercicio18');
    }

    public function calcularExercicio18(Request $request)
{
    $capital = (float)$request->input("capital");
    $taxa = (float)$request->input("taxa");
    $periodo = (float)$request->input("periodo");

    $montante = $capital * pow((1 + ($taxa / 100)), $periodo);

    return view('exercicio18', ['montante' => $montante]);
}

    public function mostrarExercicio19()
    {
        return view('exercicio19');
    }

    public function calcularExercicio19(Request $request)
{
    $dias = (int)$request->input("dias");

    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;

    return view('exercicio19', ['horas' => $horas, 'minutos' => $minutos, 'segundos' => $segundos]);
}

    public function mostrarExercicio20()
    {
        return view('exercicio20');
    }

    public function calcularExercicio20(Request $request)
{
    $distancia = (float)$request->input("distancia");
    $tempo = (float)$request->input("tempo");

    if ($tempo > 0) {
        $velocidadeMedia = $distancia / $tempo;
    } else {
        $velocidadeMedia = 0;
    }

    return view('exercicio20', ['velocidadeMedia' => $velocidadeMedia]);
}

}
