<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11 - Cálculo do Perímetro do Círculo</title>
</head>
<body>
    <h1>Cálculo do Perímetro do Círculo</h1>

    <form action="/exercicio11/resposta" method="POST">
        @csrf
        <div>
            <label for="raio">Raio:</label>
            <input type="text" name="raio" id="raio" required>
        </div>

        <button type="submit">Calcular Perímetro</button>
    </form>

    @if (isset($perimetro))
        <h2>Perímetro do Círculo: {{ $perimetro }}</h2>
    @endif
</body>
</html>
