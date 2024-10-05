<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Divisão</title>
</head>
<body>
    <h1>Dividir Dois Números</h1>

    <form action="/exercicio4/resposta" method="POST">
        @csrf
        <div>
            <label for="numero1">Número 1:</label>
            <input type="text" name="numero1" id="numero1" required>
        </div>

        <div>
            <label for="numero2">Número 2:</label>
            <input type="text" name="numero2" id="numero2" required>
        </div>

        <button type="submit">Dividir</button>
    </form>

    @if (isset($resultado))
        <h2>Resultado: {{ $resultado }}</h2>
    @endif
</body>
</html>
