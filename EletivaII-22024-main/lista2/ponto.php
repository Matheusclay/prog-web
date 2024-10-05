<?php
class Ponto {
    private $x;
    private $y;
    private static $contador = 0;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
        self::$contador++;
    }

    public static function getContador() {
        return self::$contador;
    }

    public function distanciaEntrePontos(Ponto $ponto) {
        return sqrt(pow(($this->x - $ponto->x), 2) + pow(($this->y - $ponto->y), 2));
    }

    public function distanciaEntreCoordenadas($x, $y) {
        return sqrt(pow(($this->x - $x), 2) + pow(($this->y - $y), 2));
    }

    public static function distanciaEntreDuasCoordenadas($x1, $y1, $x2, $y2) {
        return sqrt(pow(($x1 - $x2), 2) + pow(($y1 - $y2), 2));
    }
}
?>
