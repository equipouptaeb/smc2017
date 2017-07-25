<?php

require_once 'model/autorModel.php';

$a=new Autores();

$datos=$a->get_Autores_por_id();

$a->eliminarAutor();
require_once 'vista/autor.php';
?>
