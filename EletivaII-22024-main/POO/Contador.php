<?php

class Contador {

    public static $contador = 0;

    public static function incremento(){
        self::$contador++;
    }

    public static function decremento(){
        self::$contador--;
    }

}

Contador::incremento();
Contador::incremento();
Contador::decremento();
echo Contador::$contador;