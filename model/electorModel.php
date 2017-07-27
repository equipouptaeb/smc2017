<?php

class Electores extends Conectar {

    private $elector;
    //private $login;
    private $municipio;
    private $parroquia;
    private $centroelectoral;
            
    public function __construct() {
        $this->elector = array();
        $this->municipio = array();
        $this->parroquia= array();
        $this->centroelectoral= array();
        //$this->cargo = array("Jefe de Registro", "Jefe de conservación", "Registrador I");
    }

    public function get_login() {
        $sql = "select id_login,login,contrasena from login";
        $res = mysqli_query($sql, parent::con());
        while ($reg = mysql_fetch_array($res)) {
            $this->login[] = $reg;
        }
        return $this->login;
    }

    public function get_tipos() {

        return $this->tipo;
    }

    public function get_dpto() {

        return $this->dpto;
    }

    public function get_cargo() {

        return $this->cargo;
    }

    public function get_elector_por_cedula() {
        if (empty($_POST["cedula"])) {
            header("Location: " . Conectar::ruta() . "/?accion=buscarElector&m=1");
            exit();
        }
       $sql = "select
            cedula,nombre,f12,f13
            from completa100
            where
            cedula='" . $_POST["cedula"] . "'";
       
      
      
        $res = mysqli_query( parent::con(), $sql);
        if (mysqli_num_rows($res) == 0) {
            header("Location: " . Conectar::ruta() . "/?accion=buscarElector&m=2");
            exit;
        } else {
            while ($reg = mysqli_fetch_array($res)) {

                $this->elector[] = $reg;
            }
            return $this->elector;
        }
         header("Location: " . Conectar::ruta() . "/?accion=buscarElector&m=3");
    }

  public function get_Electores() {
        $sql = "select
            u.id_usuario,u.ci_usu,u.nom_usu,u.ape_usu,u.tip_usu,u.dep_usu,u.cargo_usu, l.login, l.id_login, l.contrasena
            from
            electores as e
            order by cedula desc 
            limit 100
            ";


        $res = mysqli_query($sql, parent::con());

        while ($reg = mysql_fetch_array($res)) {

            $this->elector[] = $reg;
        }

        return $this->elector;
    }

    function logueo() {
       // print_r($_POST);
        //exit();
        if (empty($_POST["usuario"])) {
            header("Location: " . Conectar::ruta() . "/?accion=index&m=1");
            exit();
        }
        if (empty($_POST["passwd"])) {
            header("Location: " . Conectar::ruta() . "/?accion=index&m=2");
            exit();
        }
        parent::con();
        $sql = sprintf
                (
                "select id_login,login,contrasena from login where login=%s and contrasena=%s", parent::comillas_inteligentes($_POST["usuario"]), parent::comillas_inteligentes($_POST["passwd"])
        );

        $res = mysqli_query( parent::con(),$sql);
     //print_r($res);
      //  exit();
        
        if (mysqli_num_rows($res) == 0) {
            header("Location: " . Conectar::ruta() . "/?accion=index&m=3");
            exit;
        } else {
            if ($reg = mysqli_fetch_array($res)) {

                $_SESSION["id_u"] = $reg["id_login"];
                $datos_u = $this->get_Usuarios_por_id_login($reg["id_login"]);
                $_SESSION["nombre"] = $datos_u[0]["nom_usu"];
                $_SESSION["apellido"] = $datos_u[0]["ape_usu"];
                $_SESSION["tipo"] = $datos_u[0]["tip_usu"];

               
                header("Location: " . Conectar::ruta() . "/?accion=principal");
                exit;
            }
        }
    }
   

    

    public function salir() {
        session_destroy();
        header("Location: " . Conectar::ruta() . "/?accion=index&m=4");
        exit;
    }

     public function get_meses() {
        $sql = "select id_mes,mes from meses";
        $res = mysql_query($sql, parent::con());
        while ($reg = mysql_fetch_array($res)) {


            $this->meses[] = $reg;
        }
        return $this->meses;
    }

}

?>
