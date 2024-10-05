<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9 - Cálculo da Área do Círculo</title>
</head>
<body>
    <h1>Cálculo da Área do Círculo</h1>

    <form action="/exercicio9/resposta" method="POST">
        @csrf
        <div>
            <label for="raio">Raio:</label>
            <input type="text" name="raio" id="raio" required>
        </div>

        <button type="submit">Calcular Área</button>
    </form>

    @if (isset($area))
        <h2>Área do Círculo: {{ $area }}</h2>
    @endif
</body>
</html>
