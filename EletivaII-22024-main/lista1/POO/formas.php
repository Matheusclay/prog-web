<?php 

interface Forma {
    public function getArea();
   
}

class Retangulo implements Forma {
    private $largura;
    private $altura;

    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function getArea() {
        return $this->largura * $this->altura;
    }
}
    