<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Principal</title>
        <link href="public/estilo.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" language="javascript" src="<?php echo Conectar::ruta() ?>/public/js/funciones.js"></script>
    </head>
    <body >
        

            <table width="450" border="1" align="center" class="Estilo1">

                <tr>
                    <td width="150" colspan="6" class="Estilo7">Administradores</td>
                
                </tr>
                            
                 <?php
                                for ($i = 0; $i < sizeof($meses); $i++) {
                                    if (date("m") == $meses[$i]["id_mes"]) {
                                        $mes=$meses[$i]["mes"];
                                    }
                                    }
                                    
                                    
        ?>
  
                <div align="right" class="fecha">Fecha:  <?php echo date("d")."/".$mes."/". date("Y")  ?> 
                </div>
                
                <tr >
                  <div align="center" class="Estilo7">Listado de Usuarios por Tipos</div>
                  <br>    
            </tr>
 <?php  
                for ($i = 0; $i < sizeof($datos); $i++) {
                    if ($datos[$i]["tip_usu"]=="Administrador"){
                    ?>
                    <tr style="background-color: inherit">
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["ci_usu"]; ?>
                        </td>
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["nom_usu"]; ?>
                        </td>
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["ape_usu"]; ?>
                        </td>
                       
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["dep_usu"]; ?>
                        </td>
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["cargo_usu"]; ?>
                        </td>
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["login"]; ?>
                        </td>
                             <?php
                        }}


                    ?>
            </table>
                 <table width="450" border="1" align="center" class="Estilo1">

                <tr>
                    <td width="150" colspan="6" class="Estilo7">Supervisores</td>
               
                </tr>
                <tr >
                  
                </tr>
 <?php  
                for ($i = 0; $i < sizeof($datos); $i++) {
                    if ($datos[$i]["tip_usu"]=="Supervisor"){
                    ?>
                    <tr style="background-color: inherit">
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["ci_usu"]; ?>
                        </td>
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["nom_usu"]; ?>
                        </td>
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["ape_usu"]; ?>
                        </td>
                       
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["dep_usu"]; ?>
                        </td>
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["cargo_usu"]; ?>
                        </td>
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["login"]; ?>
                        </td>
                             <?php
                        }}


                    ?>
            </table>
                 <table width="450" border="1" align="center" class="Estilo1">

                <tr>
                  
                    <td width="150" colspan="6" class="Estilo7">Especialistas</td>
                </tr>
                <tr >
                  
                </tr>
 <?php  
                for ($i = 0; $i < sizeof($datos); $i++) {
                    if ($datos[$i]["tip_usu"]=="Especialista"){
                    ?>
                    <tr style="background-color: inherit">
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["ci_usu"]; ?>
                        </td>
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["nom_usu"]; ?>
                        </td>
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["ape_usu"]; ?>
                        </td>
                       
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["dep_usu"]; ?>
                        </td>
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["cargo_usu"]; ?>
                        </td>
                        <td valign="top" align="center">
                            <?php echo $datos[$i]["login"]; ?>
                        </td>
                             <?php
                        }}


                    ?>
            </table>
        </div>
    </body>

</HTML>