<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17 - Cálculo de Juros Simples</title>
</head>
<body>
    <h1>Cálculo de Juros Simples</h1>

    <form action="/exercicio17/resposta" method="POST">
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

        <button type="submit">Calcular Juros Simples</button>
    </form>

    @if (isset($jurosSimples))
        <h2>Juros Simples: {{ number_format($jurosSimples, 2) }}</h2>
    @endif
</body>
</html>
