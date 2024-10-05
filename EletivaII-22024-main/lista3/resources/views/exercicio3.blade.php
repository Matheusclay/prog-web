<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Multiplicação</title>
</head>
<body>
    <h1>Multiplicar Dois Números</h1>

    <form action="/exercicio3/resposta" method="POST">
        @csrf
        <div>
            <label for="valor1">Número 1:</label>
            <input type="text" name="valor1" id="valor1" required>
        </div>

        <div>
            <label for="valor2">Número 2:</label>
            <input type="text" name="valor2" id="valor2" required>
        </div>

        <button type="submit">Multiplicar</button>
    </form>

    @if (isset($resultado))
        <h2>Resultado: {{ $resultado }}</h2>
    @endif
</body>
</html>
