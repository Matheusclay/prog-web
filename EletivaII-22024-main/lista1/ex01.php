<?php require_once("header.php") ?>

<h1>Exercício 01</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="hora_entrada">
                Hora entrada
            </label>
            <input type="time" id="hora_entrada" name="hora_entrada" class="form-control" />
        </div>
        <div class="col">
            <label for="hora_saida">
                Hora saída
            </label>
            <input type="time" id="hora_saida" name="hora_saida" class="form-control" />
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
        </div>
    </div>
</form>

<?php
function calcularTempo($hora_entrada, $hora_saida)
{
    $hora_entrada = new DateTime($hora_entrada);
    $hora_saida = new DateTime($hora_saida);

    return $hora_saida->diff($hora_entrada);
}

if ($_POST) {
    $hora_entrada = $_POST["hora_entrada"];
    $hora_saida = $_POST["hora_saida"];

    echo (calcularTempo($hora_entrada, $hora_saida)->format("%H:%I"));
}

require_once("footer.php")
?>