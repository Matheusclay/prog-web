<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 - Conversão de Temperatura</title>
</head>
<body>
    <h1>Converter Temperatura de Fahrenheit para Celsius</h1>

    <form action="/exercicio7/resposta" method="POST">
        @csrf
        <div>
            <label for="temperatura">Temperatura em Fahrenheit:</label>
            <input type="text" name="temperatura" id="temperatura" required>
        </div>

        <button type="submit">Converter</button>
    </form>

    @if (isset($celsius))
        <h2>Temperatura em Celsius: {{ $celsius }}</h2>
    @endif
</body>
</html>
