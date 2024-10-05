<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15 - Cálculo do IMC</title>
</head>
<body>
    <h1>Cálculo do IMC</h1>

    <form action="/exercicio15/resposta" method="POST">
        @csrf
        <div>
            <label for="peso">Peso (em kg):</label>
            <input type="text" name="peso" id="peso" required>
        </div>

        <div>
            <label for="altura">Altura (em metros):</label>
            <input type="text" name="altura" id="altura" required>
        </div>

        <button type="submit">Calcular IMC</button>
    </form>

    @if (isset($imc))
        <h2>IMC: {{ number_format($imc, 2) }}</h2>
    @endif
</body>
</html>
