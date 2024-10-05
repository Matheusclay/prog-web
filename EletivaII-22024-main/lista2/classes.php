<?php
//Classe Funcionario
class Funcionario {
    protected string $nome;
    protected int $codigo;
    protected float $salarioBase;

    public function __construct(int $codigo, string $nome, float $salarioBase) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getCodigo(): int {
        return $this->codigo;
    }

    public function getSalarioBase(): float {
        return $this->salarioBase;
    }

    public function setSalario(float $salarioBase): void {
        $this->salarioBase = $salarioBase;
    }

    public function getSalarioLiquido(): float {
        $inss = $this->salarioBase * 0.1;
        $ir = 0.0;
        if ($this->salarioBase > 2000.0) {
            $ir = ($this->salarioBase - 2000.0) * 0.12;
        }
        return $this->salarioBase - $inss - $ir;
    }

    public function __toString(): string {
        return get_class($this) . "\nCodigo: " . $this->getCodigo() . 
               "\nNome: " . $this->getNome() . 
               "\nSalario Base: R$ " . $this->getSalarioBase() . 
               "\nSalario Liquido: R$ " . $this->getSalarioLiquido();
    }
}

//Classe Servente: derivada de Funcionario
class Servente extends Funcionario {
    private float $insalubridade;

    public function __construct(int $codigo, string $nome, float $salarioBase) {
        parent::__construct($codigo, $nome, $salarioBase);
        $this->insalubridade = $this->salarioBase * 0.05; // 5% de insalubridade
    }

//adicional de insalubridade
    public function getSalarioLiquido(): float {
        $salarioComInsalubridade = $this->salarioBase + $this->insalubridade;
        $inss = $salarioComInsalubridade * 0.1;
        $ir = 0.0;
        if ($salarioComInsalubridade > 2000.0) {
            $ir = ($salarioComInsalubridade - 2000.0) * 0.12;
        }
        return $salarioComInsalubridade - $inss - $ir;
    }
}

//Classe Motorista
class Motorista extends Funcionario {
    private string $carteiraDeMotorista;

    public function __construct(int $codigo, string $nome, float $salarioBase, string $carteiraDeMotorista) {
        parent::__construct($codigo, $nome, $salarioBase);
        $this->carteiraDeMotorista = $carteiraDeMotorista;
    }

    public function getCarteiraDeMotorista(): string {
        return $this->carteiraDeMotorista;
    }

    public function setCarteiraDeMotorista(string $carteiraDeMotorista): void {
        $this->carteiraDeMotorista = $carteiraDeMotorista;
    }

    public function __toString(): string {
        return parent::__toString() . "\nCarteira de Motorista: " . $this->getCarteiraDeMotorista();
    }
}

//Classe MestreDeObras
class MestreDeObras extends Servente {
    private int $numeroDeFuncionarios;

    public function __construct(int $codigo, string $nome, float $salarioBase, int $numeroDeFuncionarios) {
        parent::__construct($codigo, $nome, $salarioBase);
        $this->numeroDeFuncionarios = $numeroDeFuncionarios;
    }

//adicional de supervisão
    public function getSalarioLiquido(): float {
        $adicional = floor($this->numeroDeFuncionarios / 10) * 0.10 * $this->salarioBase;
        $salarioComAdicional = $this->salarioBase + $adicional + $this->insalubridade;
        $inss = $salarioComAdicional * 0.1;
        $ir = 0.0;
        if ($salarioComAdicional > 2000.0) {
            $ir = ($salarioComAdicional - 2000.0) * 0.12;
        }
        return $salarioComAdicional - $inss - $ir;
    }

    public function getNumeroDeFuncionarios(): int {
        return $this->numeroDeFuncionarios;
    }

    public function setNumeroDeFuncionarios(int $numeroDeFuncionarios): void {
        $this->numeroDeFuncionarios = $numeroDeFuncionarios;
    }

    public function __toString(): string {
        return parent::__toString() . "\nNúmero de Funcionários Sob Supervisão: " . $this->getNumeroDeFuncionarios();
    }
}
?>
