<?php

require_once 'model/premioModel.php';

$p=new Premios();

$datos=$p->get_Premio_por_id();

$p->eliminarPremio();

?>
