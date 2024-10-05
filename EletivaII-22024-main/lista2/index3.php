<?php
require_once 'hierarquia.php';

$telefoneFixo = new Fixo("11", "987654321", 0.10);
echo "Custo da ligação no Fixo por 10 minutos: R$ " . $telefoneFixo->calculaCusto(10) . "\n";

$celularPrePago = new PrePago("21", "912345678", 0.50, "Operadora A");
echo "Custo da ligação no PrePago por 10 minutos: R$ " . $celularPrePago->calculaCusto(10) . "\n";

$celularPosPago = new PosPago("31", "923456789", 0.50, "Operadora B");
echo "Custo da ligação no PosPago por 10 minutos: R$ " . $celularPosPago->calculaCusto(10) . "\n";
?>
