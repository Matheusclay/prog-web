<?php

    include "Usuario.php";
    include "dados/Usuario.php";

    use POO\Usuario as UsuarioRaiz;
    use POO\dados\Usuario as UsuarioDados;

    $obj = new UsuarioRaiz();
    var_dump($obj);
    $obj2 = new UsuarioDados();