<?php
	if  ($_SESSION["tipo"] == "Operador" ){
		require_once 'vista/principal2.php';
	}
	else{
		require_once 'vista/principal.php';
	}



