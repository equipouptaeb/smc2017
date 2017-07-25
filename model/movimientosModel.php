<?php

class Movimientos extends Conectar {

    private $movimientos;
    private $obra;
    private $usuario;
    private $dependencia;
    private $tipoObra;
    private $autor;

    public function __construct() {
        $this->obra = array();
        $this->autor = array();
        $this->dependencia = array();
        $this->movimientos = array();
        $this->usuario = array();
        $this->tipoObra = array("Pintura", "Escultura", "Papel", "Instalaciones");
    }

    public function get_tipoObra() {

        return $this->tipoObra;
    }

    public function get_autor() {
        $sql = "select id_autor,nom_autor,ape_autor, pais_autor from autores";
        $res = mysql_query($sql, parent::con());
        while ($reg = mysql_fetch_array($res)) {
            $this->autor[] = $reg;
        }
        return $this->autor;
    }

    public function get_premio() {
        $sql = "select id_premio,nom_premio,fec_premio, event_premio, pais_premio,ciudad_premio from premios";
        $res = mysql_query($sql, parent::con());
        while ($reg = mysql_fetch_array($res)) {
            $this->premio[] = $reg;
        }
        return $this->premio;
    }

    public function get_dependencias() {
        $sql = "select id_dep,rif_dep,nom_dep,dir_dep,telf_dep from dependencias";

        $res = mysql_query($sql, parent::con());

        while ($reg = mysql_fetch_array($res)) {
            $this->dependencia[] = $reg;
        }

        return $this->dependencia;
    }

    public function get_meses() {
        $sql = "select id_mes,mes from meses";
        $res = mysql_query($sql, parent::con());
        while ($reg = mysql_fetch_array($res)) {


            $this->meses[] = $reg;
        }
        return $this->meses;
    }

    public function get_obras_por_id() {
        parent::con();

        $sql = sprintf(
                "select o.id_obra,o.id_autor,o.id_premio,o.id_dep,o.nom_obra,o.tip_obra,o.fec_obra,o.dimen_obra,o.colec_obra,o.cond_obra,o.foto_obra,a.id_autor,a.ape_autor,a.pais_autor,p.id_premio,p.nom_premio,p.fec_premio,p.event_premio,p.pais_premio,p.ciudad_premio
            from
            obras as o, autores as a, premios as p
            where
            o.id_autor=a.id_autor and o.id_premio=p.id_premio and o.id_obra=%s
            ", parent::comillas_inteligentes($_GET["v"]));

        $res = mysql_query($sql, parent::con());
        while ($reg = mysql_fetch_array($res)) {

            $this->obra[] = $reg;
        }
        return $this->obra;
    }

    public function get_Obras() {
        $sql = "select o.id_obra,o.id_autor,o.id_premio,o.id_dep,o.nom_obra,o.tip_obra,o.fec_obra,o.dimen_obra,o.colec_obra,o.cond_obra,o.foto_obra,a.id_autor,a.nom_autor,a.ape_autor,a.pais_autor,p.id_premio,p.nom_premio,p.fec_premio,p.event_premio,p.pais_premio,p.ciudad_premio,d.id_dep,d.rif_dep,d.nom_dep,d.dir_dep,d.telf_dep from obras as o, autores as a , premios as p, dependencias as d where o.id_autor=a.id_autor and o.id_premio = p.id_premio and d.id_dep=o.id_dep order by o.id_obra desc  
            
            ";


        $res = mysql_query($sql, parent::con());

        while ($reg = mysql_fetch_array($res)) {

            $this->obra[] = $reg;
        }

        return $this->obra;
    }

    public function agregar_obramov() {
 if (empty($_POST["id_usu"]) or empty($_POST["id_dep_sol"]) or empty($_POST["id_obra"]) or empty($_POST["id_dep_otor"]) ) {
            header("Location: " . Conectar::ruta() . "/?accion=movimientos&m=1");
            exit();
        }
        parent::con();


        if (strlen($_POST["dia"]) == 1) {
            $dia = "0" . $_POST["dia"];
        } else {
            $dia = $_POST["dia"];
        }
        if (strlen($_POST["mes"]) == 1) {
            $mes = "0" . $_POST["mes"];
        } else {
            $mes = $_POST["mes"];
        }
        $fecha = $_POST["anio"] . "-" . $mes . "-" . $dia;

        $query1 = sprintf
                (
                "insert into movimientos  
                values
                (null, %s, %s, %s, %s,'$fecha')", parent::comillas_inteligentes($_POST["id_usu"]), parent::comillas_inteligentes($_POST["id_dep_sol"]), parent::comillas_inteligentes($_POST["id_obra"]), parent::comillas_inteligentes($_POST["id_dep_otor"])
        );
      
        mysql_query($query1);
        
        $idmov=mysql_insert_id();
        
        $query2 = sprintf
                (
                "insert into obrasmov 
                values
                (null, $idmov, %s,%s)", 
                parent::comillas_inteligentes($_POST["id_obra"], 
                parent::comillas_inteligentes($_POST["tipomov"])
                )
        );
        
        mysql_query($query2);
        $query3 = sprintf
                (
                "update obras
            set
            id_dep=%s
            where
            id_obra=%s", parent::comillas_inteligentes($_POST["id_dep_otor"]), parent::comillas_inteligentes($_POST["id_obra"])
        );

        mysql_query($query3);

        header("Location: " . Conectar::ruta() . "/?accion=movimientos&m=3");
        exit();
    }

    public function modificar_obra() {

        if (empty($_POST["nom_obra"]) or empty($_POST["tip_obra"]) or empty($_POST["fec_obra"]) or empty($_POST["dimen_obra"]) or empty($_POST["colec_obra"]) or empty($_POST["cond_obra"])) {
            header("Location: " . Conectar::ruta() . "/?accion=modificarObra&m=1&v=" . $_POST["id_obra"]);
            exit();
        }
        parent::con();
//identifico la foto a usar



        if (empty($_FILES["foto_obra"]["name"])) {
            $foto = $_POST["archivo"];
        } else {
            $foto = "foto_" . $_POST["id_obra"] . ".jpg";
            copy($_FILES["foto_obra"]["tmp_name"], "public/images/fotoObras/$foto");
        }


        $sql = sprintf
                (
                "update obras
            set
            nom_obra=%s,
            tip_obra=%s,
            fec_obra=%s,
            dimen_obra=%s,
            colec_obra=%s,
            cond_obra=%s,
            foto_obra='$foto',
            id_autor=%s,
            id_premio=%s,
            id_dep=%s
            where
            id_obra=%s", parent::comillas_inteligentes($_POST["nom_obra"]), parent::comillas_inteligentes($_POST["tip_obra"]), parent::comillas_inteligentes($_POST["fec_obra"]), parent::comillas_inteligentes($_POST["dimen_obra"]), parent::comillas_inteligentes($_POST["colec_obra"]), parent::comillas_inteligentes($_POST["cond_obra"]), parent::comillas_inteligentes($_POST["id_autor"]), parent::comillas_inteligentes($_POST["id_premio"]), parent::comillas_inteligentes($_POST["id_dep"]), parent::comillas_inteligentes($_POST["id_obra"])
        );

        mysql_query($sql);


        header("Location: " . Conectar::ruta() . "/?accion=modificarObra&m=3&v=" . $_POST["id_obra"]);
        exit();
    }

    public function eliminar_Obra() {
        parent::con();

        $sql = sprintf("delete from obras where id_obra=%s", parent::comillas_inteligentes($_GET["v"]));

        $res = mysql_query($sql);

        header("Location: " . Conectar::ruta() . "/?accion=obras");
        exit();
    }

}


