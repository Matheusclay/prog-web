<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8 - Cálculo da Área do Retângulo</title>
</head>
<body>
    <h1>Cálculo da Área do Retângulo</h1>

    <form action="/exercicio8/resposta" method="POST">
        @csrf
        <div>
            <label for="largura">Largura:</label>
            <input type="text" name="largura" id="largura" required>
        </div>

        <div>
            <label for="altura">Altura:</label>
            <input type="text" name="altura" id="altura" required>
        </div>

        <button type="submit">Calcular Área</button>
    </form>

    @if (isset($area))
        <h2>Área do Retângulo: {{ $area }}</h2>
    @endif
</body>
</html>
