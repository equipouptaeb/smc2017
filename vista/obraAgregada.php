            <div id ="tabla1">
                <table class="Estilodatos">

                    <tr style="font-weight: bold">
                        <td valign="top" align="center">
                            Nombre de la Obra
                        </td>
                        <td valign="top" align="center">
                            Tipo Obra
                        </td>
                        <td valign="top" align="center">
                            fecha de creación
                        </td>
                        <td valign="top" align="center">
                            Dimensión
                        </td>
                        <td valign="top" align="center">
                            Nombre de la colección
                        </td>
                        <td valign="top" align="center">
                            Condición de la Obra
                        </td>
                        <td valign="top" align="center">
                            Imagen de la Obra
                        </td>
                        <td valign="top" align="center">
                            Nombre  del autor
                        </td>
                        <td valign="top" align="center">
                            Premios
                        </td>
                        <td valign="top" align="center">
                            Ubicación
                        </td>
                        <td valign="top" align="center">
                            dirección
                        </td>
                      
                    

                    </tr>
                   
                        <tr style="background-color: inherit">
                            <td valign="top" align="center">
                                <?php echo $datosRes[0]["nom_obra"]; ?>
                            </td>
                            <td valign="top" align="center">
                                <?php echo $datosRes[0]["tip_obra"]; ?>
                            </td>
                            <td valign="top" align="center">
 <?php /*cambiar fecha    Tambien en el sql poner date_format(fecha,'%d-%m-%Y') as fecha
  */                        
$fecha = $datosRes[0]["fec_obra"];

$dia= substr($fecha,8,2);
$mes= substr($fecha,5,2);
$anio= substr($fecha,0,4);
$fecha = $dia."-".$mes."-".$anio;
echo $fecha
?>
                  
                            
                            
                            </td>
                            <td valign="top" align="center">
                                <?php echo $datosRes[0]["dimen_obra"]; ?>
                            </td>
                            <td valign="top" align="center">
                                <?php echo $datosRes[0]["colec_obra"]; ?>
                            </td>
                            <td valign="top" align="center">
                                <?php echo $datosRes[0]["cond_obra"]; ?>
                            </td>                        

                            <td valign="top" align="center">
                                <img src="<?php echo Conectar::ruta() ?>/public/images/fotoObras/<?php echo $datosRes[0]["foto_obra"]; ?>" height="50" width="50" >
                            </td>

                            <td valign="top" align="center">
                                <?php echo $datosRes[0]["nom_autor"] . " " . $datosRes[0]["ape_autor"]; ?>
                            </td>
                            <td valign="top" align="center">
                                <?php echo $datosRes[0]["nom_premio"]; ?>
                            </td>
                            <td valign="top" align="center">
                                <?php echo $datosRes[0]["nom_dep"]; ?>
                            </td>
                            <td valign="top" align="center">
                                <?php echo $datosRes[0]["dir_dep"]; ?>
                            </td>
                        </tr>
                  

                </table>
            </div>

        </div>
    </body>

</HTML>