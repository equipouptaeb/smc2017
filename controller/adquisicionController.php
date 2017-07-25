<?php
require_once 'model/adquisicionModel.php';
require_once 'model/movimientosModel.php';
require_once 'model/obrasModel.php';
$ob= new Obras();
$u=new Usuarios();
$d=new Dependencias();
$m=new Movimientos();
$o=new Obras();


if(isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
    $ob-> agregar_obra();
    exit;
}
if(isset($_POST["grabar_mov"]) and $_POST["grabar_mov"]=="aceptar")
{  
    $m-> agregar_obramov();
   
 
}
$tipoObra=$ob->get_tipoObra();
$autores=$ob->get_autor();
$deps=$ob->get_dependencias();
$premios=$ob->get_premio();
$meses=$ob->get_meses();
require_once 'vista/adquisicionObra.php';
?>
