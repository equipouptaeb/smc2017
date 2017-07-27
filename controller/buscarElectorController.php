<?php

require_once 'model/electorModel.php';

$e = new Electores();

if (isset($_POST["buscar"]) and $_POST["buscar"] == "si") {

    $datos = $e->get_elector_por_cedula();
    
}


require_once 'vista/electorAgregado.php';
?>
