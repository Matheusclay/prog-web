<?php require_once("header.php") ?>

<h1>Exercício 02</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="valor_hora">Valor da Hora</label>
            <input type="number" id="valor_hora" name="valor_hora" class="form-control" step="0.01" /> <!-- Permite valores decimais -->
        </div>
        <div class="col">
            <label for="hora_mes">Horas Trabalhadas no Mês</label>
            <input type="number" id="hora_mes" name="hora_mes" class="form-control" step="0.01" /> <!-- step serve para  -->
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
        </div>
    </div>
</form>


<?php
if (!isset($_POST["calcular"])) {
    exit;
}
function calcularSalarioSemanal($valor_hora, $hora_mes)
{
    $valor_mensal = $valor_hora * $hora_mes;
    
    return $valor_mensal / 4.33; // Lembrando que 4.33 é a média de semanas em um mês 
}
{
    $valor_hora = $_POST["valor_hora"];
    $hora_mes = $_POST["hora_mes"];


    $salario = calcularSalarioSemanal($valor_hora, $hora_mes);
    echo "O salário semanal é de R$ " . number_format($salario, 2, ",", "."); // number_format serve para formatar o número já deixando no nosso padrão brasileiro
}



require_once("footer.php")
?>