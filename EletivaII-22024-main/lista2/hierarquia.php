<?php

abstract class Telefone {
    protected string $ddd;
    protected string $numero;

    public function __construct(string $ddd, string $numero) {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }


    abstract public function calculaCusto(int $tempo): float;
}


class Fixo extends Telefone {
    private float $custoPorMinuto;

    public function __construct(string $ddd, string $numero, float $custoPorMinuto) {
        parent::__construct($ddd, $numero);
        $this->custoPorMinuto = $custoPorMinuto;
    }

    public function calculaCusto(int $tempo): float {
        return $tempo * $this->custoPorMinuto;
    }
}

abstract class Celular extends Telefone {
    protected float $custoMinutoBase;
    protected string $operadora;

    public function __construct(string $ddd, string $numero, float $custoMinutoBase, string $operadora) {
        parent::__construct($ddd, $numero);
        $this->custoMinutoBase = $custoMinutoBase;
        $this->operadora = $operadora;
    }
}

class PrePago extends Celular {
    public function calculaCusto(int $tempo): float {
        $custoAcrescido = $this->custoMinutoBase * 1.40;
        return $tempo * $custoAcrescido;
    }
}

class PosPago extends Celular {
    public function calculaCusto(int $tempo): float {
        $custoDescontado = $this->custoMinutoBase * 0.90;
        return $tempo * $custoDescontado;
    }
}
?>
