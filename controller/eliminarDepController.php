<?php

require_once 'model/depModel.php';

$d=new Dependencias();

$datos=$d->get_Dep_por_id();

$d->eliminarDep();
?>
