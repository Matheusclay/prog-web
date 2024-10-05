<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <p>Crie um formulário que permita ao usuário inserir dois números. O programadeve subtrair o
    segundo número do primeiro e exibir o resultado.</p>
    <form action="/respostaEx02" method="POST">
        @CSRF
        <input type="number" name="val01" />
        <input type="number" name="val02" />
        <button type="submit">Calcular</button>
    </form>
</body>
</html>