<?php

session_start();
date_default_timezone_set("America/Caracas");

class Conectar {

    private $port = '5432';
    private $host = 'localhost';
    private $db = 'eleccon2017';
    private $usuario = 'root';
    private $pass = '';

    public function con() {
        try {
            $db = new PDO("mysql:dbname={$this->db};host=$this->host",$this->usuario, $this->pass );

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $db;

        $con = mysql_connect("localhost", "root", "");
        mysql_query("SET NAMES 'utf8'");
        mysql_select_db("sscpoa");
        return $con;
    }

    public static function ruta() {
        return "http://localhost/smc2017";
    }

//tomado del manual de php

    public function comillas_inteligentes($valor) {
        // Retirar las barras
        if (get_magic_quotes_gpc()) {
            $valor = stripslashes($valor);
        }

        // Colocar comillas si no es entero
        if (!is_numeric($valor)) {
            $valor = "'" . mysql_real_escape_string($valor) . "'";
        }
        return $valor;
    }

}

?>
