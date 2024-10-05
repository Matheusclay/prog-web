<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14 - Conversão de Quilômetros para Milhas</title>
</head>
<body>
    <h1>Conversão de Quilômetros para Milhas</h1>

    <form action="/exercicio14/resposta" method="POST">
        @csrf
        <div>
            <label for="quilometros">Valor em Quilômetros:</label>
            <input type="text" name="quilometros" id="quilometros" required>
        </div>

        <button type="submit">Converter</button>
    </form>

    @if (isset($milhas))
        <h2>Valor em Milhas: {{ $milhas }}</h2>
    @endif
</body>
</html>
