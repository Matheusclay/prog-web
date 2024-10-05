<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12 - Cálculo de Potência</title>
</head>
<body>
    <h1>Cálculo de Potência</h1>

    <form action="/exercicio12/resposta" method="POST">
        @csrf
        <div>
            <label for="base">Base:</label>
            <input type="text" name="base" id="base" required>
        </div>

        <div>
            <label for="expoente">Expoente:</label>
            <input type="text" name="expoente" id="expoente" required>
        </div>

        <button type="submit">Calcular Potência</button>
    </form>

    @if (isset($resultado))
        <h2>Resultado: {{ $resultado }}</h2>
    @endif
</body>
</html>
