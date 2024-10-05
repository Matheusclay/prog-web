<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16 - Cálculo de Preço com Desconto</title>
</head>
<body>
    <h1>Cálculo de Preço com Desconto</h1>

    <form action="/exercicio16/resposta" method="POST">
        @csrf
        <div>
            <label for="preco">Preço:</label>
            <input type="text" name="preco" id="preco" required>
        </div>

        <div>
            <label for="percentual_desconto">Percentual de Desconto:</label>
            <input type="text" name="percentual_desconto" id="percentual_desconto" required>
        </div>

        <button type="submit">Calcular Preço com Desconto</button>
    </form>

    @if (isset($precoComDesconto))
        <h2>Preço com Desconto: {{ number_format($precoComDesconto, 2) }}</h2>
    @endif
</body>
</html>
