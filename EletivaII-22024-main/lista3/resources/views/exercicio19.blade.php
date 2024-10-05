<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19 - Conversão de Dias</title>
</head>
<body>
    <h1>Conversão de Dias para Horas, Minutos e Segundos</h1>

    <form action="/exercicio19/resposta" method="POST">
        @csrf
        <div>
            <label for="dias">Valor em dias:</label>
            <input type="text" name="dias" id="dias" required>
        </div>

        <button type="submit">Converter</button>
    </form>

    @if (isset($horas) && isset($minutos) && isset($segundos))
        <h2>Resultados:</h2>
        <p>Horas: {{ $horas }}</p>
        <p>Minutos: {{ $minutos }}</p>
        <p>Segundos: {{ $segundos }}</p>
    @endif
</body>
</html>
