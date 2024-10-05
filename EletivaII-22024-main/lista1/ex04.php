<?php require_once ("header.php") ?>


<h1>Exercício 04</h1>
<form action="" method="post">
    <div class="row">
        <h2>Tasks</h2>
        <div class="col">
            <label for="nome_tarefa">Nome da tarefa</label>
            <input type="text" id="nome_tarefa" name="nome_tarefa" class="form-control" />
        </div>
        <div class="col">
            <label for="total_horas">Total de horas da tarefa</label>
            <input type="number" id="total_horas" name="total_horas" class="form-control" />
        </div>
        <div class="col">
            <label for="complexidade">Complexidade</label>
            <select id="complexidade" name="complexidade" class="form-control">
                <option value="1">Baixa</option>
                <option value="2">Média</option>
                <option value="3">Alta</option>
            </select>
        </div>
    </div>
    <div class="row">
        <h2>Funcionário</h2>
        <div class="col">
            <label for="nome_funcionario">Nome do funcionário</label>
            <input type="text" id="nome_funcionario" name="nome_funcionario" class="form-control" />
        </div>
        <div class="col">
            <label for="disponibilidade_horas">Total de horas disponíveis de trabalho</label>
            <input type="number" id="disponibilidade_horas" name="disponibilidade_horas" class="form-control" />
        </div>
        <div class="col">
            <label for="nivel_experiencia">Nível de experiência</label>
            <select id="nivel_experiencia" name="nivel_experiencia" class="form-control">
                <option value="1">Júnior</option>
                <option value="2">Pleno</option>
                <option value="3">Sênior</option>
            </select>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
            </div>
        </div>
    </div>
</form>

<?php

if (isset($_POST["calcular"])) {
    function calcularDisponibilidade($total_horas, $disponibilidade_horas)
    {
        if ($disponibilidade_horas > ($total_horas * 0.1)) {
            return "Disponível";
        } else {
            return " Indisponível";
        }
    }

    function assumirTask($nivel_experiencia, $complexidade)
    {
        if ($nivel_experiencia == 1 && $complexidade == 1) {
            return "Pode assumir";
        } elseif ($nivel_experiencia == 2 && $complexidade <= 2) {
            return "Pode assumir";
        } elseif ($nivel_experiencia == 3 && $complexidade >= 2) {
            return "Pode assumir";
        } else {
            return "Não pode assumir";
        }
    }
    $mapaComplexidade = [
        1 => "Baixa",
        2 => "Média",
        3 => "Alta"
    ];

    $mapaNivelExperiencia = [
        1 => "Júnior",
        2 => "Pleno",
        3 => "Sênior"
    ];


    

    $nome_tarefa = $_POST["nome_tarefa"];
    $total_horas = $_POST["total_horas"];
    $complexidade = $_POST["complexidade"]; 
    $nome_funcionario = $_POST["nome_funcionario"];
    $disponibilidade_horas = $_POST["disponibilidade_horas"];
    $nivel_experiencia = $_POST["nivel_experiencia"];

    $disponibilidade = calcularDisponibilidade($total_horas, $disponibilidade_horas);
    $assumir = assumirTask($nivel_experiencia, $complexidade);
    $descricaoComplexidade = $mapaComplexidade[$complexidade];
    $descricaoNivelExperiencia = $mapaNivelExperiencia[$nivel_experiencia];


    echo "O funcionário " . $nome_funcionario . " está disponível para a tarefa " . $nome_tarefa . "? " . $disponibilidade . "<br>";
    echo "O funcionário " . $nome_funcionario . " pode assumir a tarefa " . $nome_tarefa . "? " . $assumir . " pois ele é " . $descricaoNivelExperiencia . " e a tarefa é de complexidade " . $descricaoComplexidade;
}

require_once ("footer.php");
?>