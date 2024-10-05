<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18 - Cálculo de Montante com Juros Compostos</title>
</head>
<body>
    <h1>Cálculo de Montante com Juros Compostos</h1>

    <form action="/exercicio18/resposta" method="POST">
        @csrf
        <div>
            <label for="capital">Capital:</label>
            <input type="text" name="capital" id="capital" required>
        </div>

        <div>
            <label for="taxa">Taxa de Juros (% ao ano):</label>
            <input type="text" name="taxa" id="taxa" required>
        </div>

        <div>
            <label for="periodo">Período (em anos):</label>
            <input type="text" name="periodo" id="periodo" required>
        </div>

        <button type="submit">Calcular Montante</button>
    </form>

    @if (isset($montante))
        <h2>Montante: {{ number_format($montante, 2) }}</h2>
    @endif
</body>
</html>
