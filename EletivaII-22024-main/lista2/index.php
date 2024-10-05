<?php
require_once 'Ponto.php';


$ponto1 = new Ponto(3, 4);
$ponto2 = new Ponto(6, 8);

echo "Pontos criados: " . Ponto::getContador() . "<br>";

echo "Distância entre ponto1 e ponto2: " . $ponto1->distanciaEntrePontos($ponto2) . "<br>";

echo "Distância entre ponto1 e coordenadas (10, 12): " . $ponto1->distanciaEntreCoordenadas(10, 12) . "<br>";

echo "Distância entre coordenadas (3, 4) e (7, 1): " . Ponto::distanciaEntreDuasCoordenadas(3, 4, 7, 1) . "<br>";
?>
