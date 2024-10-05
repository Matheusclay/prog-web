<?php require_once("header.php") ?>

<h1>Exercício 06</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="qtde_horas">Estimativa de horas</label>
            <input type="number" id="qtde_horas" name="qtde_horas" class="form-control" /> 
        </div>
        <div class="col">
            <label for="valor_hora">Valor da hora</label>
            <input type="number" id="valor_hora" name="valor_hora" class="form-control" /> 
        </div>
        <div class="col">
            <label for="hora_adicional">Custos adicionais</label>
            <input type="number" id="hora_adicional" name="hora_adicional" class="form-control"  /> 
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
function calcularCustoProjeto($qtde_horas, $valor_hora, $hora_adicional)
{

    $custo_mao_obra = $qtde_horas * $valor_hora;
    
    $custo_adicional = $hora_adicional;
    if ($custo_adicional == null) {
        $custo_adicional = 0;
    }
    $custo_total = $custo_mao_obra + $custo_adicional;  
    return $custo_total;
}
{
    $qtde_horas = $_POST["qtde_horas"];
    $valor_hora = $_POST["valor_hora"];
    $hora_adicional = $_POST["hora_adicional"];

    $custo = calcularCustoProjeto($qtde_horas, $valor_hora, $hora_adicional);
    echo "O custo total do projeto é de R$ " . number_format($custo, 2, ",", ".");
}



require_once("footer.php")
?>