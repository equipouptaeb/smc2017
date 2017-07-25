<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Principal</title>
        <link href="public/estilo.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" language="javascript" src="<?php echo Conectar::ruta() ?>/public/js/funciones.js"></script>
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
            <div align="center" class="Estilo7">      Movimiento de Obras</div>

            <a href="<?php echo Conectar::ruta() ?>/?accion=principal" title="Volver a principal">
                <img src="<?php echo Conectar::ruta() ?>/public/images/home.png" border="0">
            </a>Principal
            <hr>
<?php
            if (isset($_GET["m"])) {
                switch ($_GET["m"]) {
                    case '1':
                        ?>
                        <h5 style="color: red;">Algunos datos están vacíos</h5>
                        <?php
                        break;
                    case '2':
                        ?>
                        <h5 style="color: red;">No puede trasladarse la obra</h5>
                        <?php
                        break;
                    case '3':
                        ?>
                        <h5 style="color: green;">El movimiento ha sido exitosamente</h5>
                        <?php
                        break;
                }
            }
            ?>
            <hr>
            <div id ="tabla1">
                 <form action="" method="post" name="form_o">
                <fieldset>
                    <legend align="left"><font size="3"color="red">Datos Movimientos</font></legend>
                      <td valign="top" align="center">Fecha Solicitud:</td>
                            <td >
                                <select name="dia" id="dia">
                                    <?php
                                    for ($i = 1; $i <= 31; $i++) {

                                        if (strlen($i) == 1) {
                                            $dia = "0" . $i;
                                        } else {
                                            $dia = $i;
                                        }
                                        if (date("d") == $i) {
                                            ?>
                                            <option value="<?php echo $i; ?>" title="<?php echo $i; ?>" selected="selected"><?php echo $i; ?></option>
                                            <?php
                                        } else {
                                            ?>
                                            <option value="<?php echo $i; ?>" title="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                                <select name="mes" id="mes">
                                    <?php
                                    for ($i = 0; $i < sizeof($meses); $i++) {
                                        if (date("m") == $meses[$i]["id_mes"]) {
                                            ?>
                                            <option value="<?php echo $meses[$i]["id_mes"]; ?>" title="<?php echo $meses[$i]["mes"]; ?>" selected="selected"><?php echo $meses[$i]["mes"]; ?></option>
                                            <?php
                                        } else {
                                            ?>
                                            <option value="<?php echo $meses[$i]["id_mes"]; ?>" title="<?php echo $meses[$i]["mes"]; ?>"><?php echo $meses[$i]["mes"]; ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                                <select name="anio" id="anio">
                                    <?php
                                    for ($i = 1900; $i <= date("Y"); $i++) {
                                        if (date("Y") == $i) {
                                            ?>
                                            <option value="<?php echo $i; ?>" title="<?php echo $i; ?>" selected="selected"><?php echo $i; ?></option>
                                            <?php
                                        } else {
                                            ?>
                                            <option value="<?php echo $i; ?>" title="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select></td>
                        </tr>
                        <tr >
                            <td align="right" height="30">Usuario Responsable:</td><td>
                                <select name="id_usu" class="Estilo1" id="id_usu" onchange="">
                                    <option value="0" selected="selected">Seleccione</option>
                                    <?php
                                    for ($i = 0; $i < sizeof($usuarios); $i++) {
                                        ?>
                                        <option value="<?php echo $usuarios[$i]["id_usuario"]; ?>"
                                                title="<?php echo $usuarios[$i]["nom_usu"] . " " . $usuarios[$i]["ape_usu"]; ?>">
                                            <?php echo "Nombre:" . $usuarios[$i]["nom_usu"] . "  Apellido:" . $usuarios[$i]["ape_usu"] . "  CI:" . $usuarios[$i]["ci_usu"] . "  Tipo:" . $usuarios[$i]["tip_usu"]; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>

                            </td>

                        </tr>
                    </table>
                </fieldset>
                    
                    
                    
                     <fieldset>          
                    <table   border="0">
                        <tr >
                            <td valign="top" colspan="2" align="center" >Solicitante del préstamo:</td>
                        </tr>
                        <tr>

                    <legend align="left"><font size="3"color="red">Desde </font>
                    <table border="0" >
                        <tr >
                            <td>Desde:</td>
                            <td>
                                <select name="id_dep_otor" class="Estilo1" id="id_dep_otor" >
                                    <option value="0" selected="selected">Seleccione</option>
                                    <?php
                                    for ($i = 0; $i < sizeof($depen); $i++) {
                                        ?>
                                        <option value="<?php echo $depen[$i]["id_dep"]; ?>"
                                                title="<?php echo $depen[$i]["rif_dep"]; ?>">
                                            <?php echo "Rif: " . $depen[$i]["rif_dep"] . "   Nombre  " . $depen[$i]["nom_dep"]; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                        </tr>
                    </table>
              
                            
                        </tr>
   </fieldset>                     <tr >





                          
                <br />
                
     <fieldset>
                    <legend align="left"><font size="3"color="red">Hacia </font></legend>           
                
                 <td>Dependencia solicitante del Préstamo:</td>
                            <td><select name="id_dep_sol" class="Estilo1" id="id_dep" >
                                    <option value="0" selected="selected">Seleccione</option>
                                    <?php
                                    for ($i = 0; $i < sizeof($depen); $i++) {
                                        ?>
                                        <option value="<?php echo $depen[$i]["id_dep"]; ?>"
                                                title="<?php echo $depen[$i]["rif_dep"]; ?>">
                                            <?php echo "Rif: " . $depen[$i]["rif_dep"] . "   Nombre  " . $depen[$i]["nom_dep"]; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </td>
                            
              </fieldset>               
                      <fieldset>
                        <legend align="left"><font size="3"color="red">Obras</font></legend>
                        <table border="0" >
                            <tr >
                                <td>Obra:</td>
                                <td>

                                    <select name="id_obra" id="id_obra" class="Estilo1" onchange="pedirDatos();">
                                        <option value="0">Seleccionar</option>
                                        <?php
                                        for ($i = 0; $i < sizeof($obras); $i++) {
                                            ?>
                                            <option value="<?php echo $obras[$i]["id_obra"]; ?>"
                                                    title="<?php echo $obras[$i]["nom_obra"]; ?>">                            <?php echo "Nombre Obra: " . $obras[$i]["nom_obra"] . "  ColecciÃ³n  " . $obras[$i]["colec_obra"]; ?></option>
                                                    <?php
                                                }
                                                ?>
                                    </select>

                        </table>                    


                        </tr>
                        <div id="resultado"></div>
                    </fieldset> 
                <div align="center">
                  
                    <input type="hidden" name="tipomov" value="1">
                    <input class="Estilo1" type="submit" name="grabar_mov" value="aceptar">
                    <input class="Estilo1" type="reset" value="limpiar">
                    <input class="Estilo1" type="button" name="cancelar" value="cancelar" onclick="history.back()">
                </div>
                </form>
                
             
                <hr>

             

        </div>
    </body>

</HTML>