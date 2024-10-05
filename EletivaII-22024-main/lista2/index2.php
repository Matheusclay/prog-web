<?php
require 'classes.php'; 

// Instância
$servente = new Servente(101, "Leandro", 3000.00);
echo $servente . "<br>";

$motorista = new Motorista(102, "Matheus", 3500.00, "BC");
echo $motorista . "<br>";

$mestreDeObras = new MestreDeObras(103, "Pedro", 4000.00, 25);
echo $mestreDeObras . "<br>";
?>
