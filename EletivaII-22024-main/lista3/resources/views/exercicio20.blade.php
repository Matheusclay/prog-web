<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20 - Cálculo de Velocidade Média</title>
</head>
<body>
    <h1>Cálculo de Velocidade Média</h1>

    <form action="/exercicio20/resposta" method="POST">
        @csrf
        <div>
            <label for="distancia">Distância (em km):</label>
            <input type="text" name="distancia" id="distancia" required>
        </div>

        <div>
            <label for="tempo">Tempo (em horas):</label>
            <input type="text" name="tempo" id="tempo" required>
        </div>

        <button type="submit">Calcular Velocidade Média</button>
    </form>

    @if (isset($velocidadeMedia))
        <h2>Velocidade Média: {{ number_format($velocidadeMedia, 2) }} km/h</h2>
    @endif
</body>
</html>
