<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Principal</title>
        <link href="public/estilo.css" rel="stylesheet" type="text/css">
         <script type="text/javascript" language="javascript" src="<?php echo Conectar::ruta()?>/public/js/funciones.js"></script>
    </head>
    <body >
        <div id="contenedor" >
            <div id="cabecera" >
                <img src="public/images/encabezado.gif" >
            </div>
            <div id="sesion">
                <?php include("sesion.php"); ?>
            </div>
            <div id="menu">
                <?php include("selecmenu.php"); ?>
            </div>
            <div align="center" class="Estilo7">Operaciones Condición</div>
            
            <a href="<?php echo Conectar::ruta()?>/?accion=principal" title="Volver a principal">
<img src="<?php echo Conectar::ruta()?>/public/images/home.png" border="0">
</a>Principal
            
            <a href="<?php echo Conectar::ruta() ?>/?accion=agregarObras" title="Nueva Obra" >
                <img src="<?php echo Conectar::ruta() ?>/public/images/add_32.png" >
            </a>Agregar
           
            <a href="<?php echo Conectar::ruta() ?>/?accion=buscarObras" title="Buscar Obra" >
                <img src="<?php echo Conectar::ruta() ?>/public/images/search_32.png" >
            </a> Buscar
            <hr>
            <div id ="tabla1">
            <table class="Estilodatos">
               
                <tr style="font-weight: bold">
                   <td valign="top" align="center">
                        Nombre autor
                    </td>
                    <td valign="top" align="center">
                        Apellido autor
                    </td>
              
                         
           <td valign="top" align="center">
                        Nombre Obra
                    </td>
                    <td valign="top" align="center">
                        Tipo Obra
                    </td>
                    <td valign="top" align="center">
                        fecha Obra
                    </td>
                    <td valign="top" align="center">
                        Dimensión Obra
                    </td>
                    <td valign="top" align="center">
                        Colección Obra
                    </td>
                    <td valign="top" align="center">
                        Condición Obra
                    </td>
           
                    <td valign="top" align="center">
                        Modificar
                    </td>
                    <td valign="top" align="center">
                        Eliminar
                    </td>
           
                </tr>
                <?php
                for ($i = 0; $i < sizeof($datos); $i++) {
                    ?>
                   <tr style="background-color: inherit">
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["nom_autor"]; ?>
                        </td>
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["ape_autor"]; ?>
                        </td>
                                       
                    <td valign="top" align="center">
                            <?php echo $datos[$i]["nom_obra"]; ?>
                        </td>
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["tip_obra"]; ?>
                        </td>
                        <td valign="top" align="center">
                            <?php
                                $fecha = $datos[$i]["fec_obra"];

                                $dia = substr($fecha, 8, 2);
                                $mes = substr($fecha, 5, 2);
                                $anio = substr($fecha, 0, 4);
                                $fecha = $dia . "-" . $mes . "-" . $anio;
                                echo $fecha
                                ?>
                        </td>
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["dimen_obra"]; ?>
                        </td>
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["colec_obra"]; ?>
                        </td>
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["cond_obra"]; ?>
                        </td>
                        
                        
                        <td valign="top" align="center">
                            <a href="<?php echo Conectar::ruta() ?>/?accion=modificarObra&v=<?php echo $datos[$i]["id_obra"]; ?>" title="Modificar">
                                <img src="<?php echo Conectar::ruta() ?>/public/images/address_book_add_32.png" border="0"  width="24" height="24"> 
                            </a>
                        </td>
                        <td valign="top" align="center">
                            <a href="" title="Eliminar"
 onclick="eliminar('<?php echo Conectar::ruta(); ?>/?accion=eliminarCondicion&v=<?php echo $datos[$i]["id_obra"]; ?>')" >


                                <img src="<?php echo Conectar::ruta() ?>/public/images/address_book_close_32.png" border="0" width="24" height="24"> 
                            </a>
                        </td>
                    </tr>
                <?php } ?>

            </table>
        </div>
            </div>
    </body>

</HTML>