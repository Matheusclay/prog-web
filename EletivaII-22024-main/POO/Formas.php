<?php

interface Forma{

    public function area();

}

class Retangulo implements Forma {

    private $altura;
    private $base;

    public function area(){
        return $this->altura * $this->base;
    }

}