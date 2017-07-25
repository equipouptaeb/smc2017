<?php

require_once("../include/config.php");
require_once("../model/obrasModel.php");
$o=new Obras();

$datosRes=$o->get_obras_por_id();



$tipoObra=$o->get_tipoObra();
$autores=$o->get_autor();
$deps=$o->get_dependencias();
$premios=$o->get_premio();
$meses=$o->get_meses();

require_once("../vista/obraAgregada.php");

?>
