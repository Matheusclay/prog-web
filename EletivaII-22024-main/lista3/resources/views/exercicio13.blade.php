<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13 - Conversão de Metros para Centímetros</title>
</head>
<body>
    <h1>Conversão de Metros para Centímetros</h1>

    <form action="/exercicio13/resposta" method="POST">
        @csrf
        <div>
            <label for="metros">Valor em Metros:</label>
            <input type="text" name="metros" id="metros" required>
        </div>

        <button type="submit">Converter</button>
    </form>

    @if (isset($centimetros))
        <h2>Valor em Centímetros: {{ $centimetros }}</h2>
    @endif
</body>
</html>
