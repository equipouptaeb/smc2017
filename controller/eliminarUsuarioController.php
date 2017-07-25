<?php

require_once 'model/usuarioModel.php';

$u=new Usuarios();
$datos=$u->get_Usuarios_por_id();

$u->eliminarUsuario();
?>
