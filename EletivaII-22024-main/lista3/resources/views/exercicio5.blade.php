<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Média das Notas</title>
</head>
<body>
    <h1>Cálculo da Média das Notas</h1>

    <form action="/exercicio5/resposta" method="POST">
        @csrf
        <div>
            <label for="nota1">Nota 1:</label>
            <input type="text" name="nota1" id="nota1" required>
        </div>

        <div>
            <label for="nota2">Nota 2:</label>
            <input type="text" name="nota2" id="nota2" required>
        </div>

        <div>
            <label for="nota3">Nota 3:</label>
            <input type="text" name="nota3" id="nota3" required>
        </div>

        <button type="submit">Calcular Média</button>
    </form>

    @if (isset($media))
        <h2>Média: {{ $media }}</h2>
    @endif
</body>
</html>
