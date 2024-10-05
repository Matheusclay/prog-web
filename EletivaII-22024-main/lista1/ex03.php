<?php require_once("header.php") ?>


<h1>Exercício 03</h1>
<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="lucros_empresa">Lucros da Empresa</label>
            <input type="number" id="lucros_empresa" name="lucros_empresa" class="form-control" step="0.01" /> <!-- Permite valores decimais -->
        </div>
        <div class="col">
            <label for="nome_funcionario">Nome do Funcionário</label>
            <input type="text" id="nome_funcionario" name="nome_funcionario" class="form-control" />
        </div>
        <div class="col">
            <label for="desempenho">Desempenho</label>
            <select id="desempenho" name="desempenho" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

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
    function calcularBonus($lucros_empresa, $desempenho)
    {
        $bonus = 0;
        if ($desempenho == 1) {
            $bonus = $lucros_empresa * 0.001;
        } else if ($desempenho == 2) {
            $bonus = $lucros_empresa * 0.002;
        } else if ($desempenho == 3) {
            $bonus = $lucros_empresa * 0.003;
        } else if ($desempenho == 4) {
            $bonus = $lucros_empresa * 0.005;
        } else if ($desempenho == 5) {
            $bonus = $lucros_empresa * 0.007;
        }
        return $bonus;
    }
    {
    $lucros_empresa = $_POST["lucros_empresa"];
    $nome_funcionario = $_POST["nome_funcionario"];
    $desempenho = $_POST["desempenho"];
    
    $bonus = calcularBonus($lucros_empresa, $desempenho);
    echo "O funcionário " . $nome_funcionario . " receberá um bônus de R$ " . number_format($bonus, 2, ",", ".");
    }
    
require_once("footer.php")
?>