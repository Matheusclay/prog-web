<?php require_once("header.php") ?>

<h1>Exercício 05</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="tempo_servico">Tempo de serviço (Dias)</label>
            <input type="number" id="tempo_servico" name="tempo_servico" class="form-control" /> 
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
        </div>
    </div>
</form>

<?php
if (isset($_POST["calcular"])) {
    function calcularFerias($tempo_servico)
    {
        
        $dias_ferias = floor($tempo_servico / 30); // florr serve para arredondar para baixo

        if ($dias_ferias > 30) {
            $dias_ferias = 30;
        }

        return $dias_ferias;
    }

    $tempo_servico = $_POST["tempo_servico"];
    $dias_ferias = calcularFerias($tempo_servico);

    echo "Com base em " . $tempo_servico . " dias de serviço, o funcionário tem direito a " . $dias_ferias . " dias de férias.";
}

require_once("footer.php")
?>
