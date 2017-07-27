<?php

require_once("../include/config.php");
require_once("../model/electorModel.php");
$e=new Elector();

$datosRes=$e->get_elector_por_cedula();



$tipoObra=$o->get_tipoObra();
$autores=$o->get_autor();
$deps=$o->get_dependencias();
$premios=$o->get_premio();
$meses=$o->get_meses();

require_once("../vista/obraAgregada.php");

?>
