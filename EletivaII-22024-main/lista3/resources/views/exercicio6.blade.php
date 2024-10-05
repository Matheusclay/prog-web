<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6 - Conversão de Temperatura</title>
</head>
<body>
    <h1>Converter Temperatura de Celsius para Fahrenheit</h1>

    <form action="/exercicio6/resposta" method="POST">
        @csrf
        <div>
            <label for="temperatura">Temperatura em Celsius:</label>
            <input type="text" name="temperatura" id="temperatura" required>
        </div>

        <button type="submit">Converter</button>
    </form>

    @if (isset($fahrenheit))
        <h2>Temperatura em Fahrenheit: {{ $fahrenheit }}</h2>
    @endif
</body>
</html>
