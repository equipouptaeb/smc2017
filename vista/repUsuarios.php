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
            <div align="center" class="Estilo7">Reportes Usuarios</div>

            <a href="<?php echo Conectar::ruta() ?>/?accion=principal" title="Volver a principal">
                <img src="<?php echo Conectar::ruta() ?>/public/images/home.png" border="0">
                Principal</a>

   <a href="<?php echo Conectar::ruta() ?>/?accion=imprimirRepUsuario" title="Buscar Autor" >
                <img src="<?php echo Conectar::ruta() ?>/public/images/print_32.png" >
          Imprimir</a> 
            <hr>

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
                <7��=�e��Tſ�U[�B��3����=D���`�H���BM�S3)�j*X�>v!dZn �[��ِ:�RHC� N|�i�·Y�!�N�J�
���N_oD
a�MŖm^^S$���t�Gʹn�%���[aHhh./+��2�9Dh4���=�G������6�F�e�07�����Jk�Z��?��l:���������5��J��P�k��a�[ξע��_c#��p^t�����Żr���u]%([�1�2�z[	��/E�+���h��W`�����2��to4_Ű-� ��Qf��w�Cv�q9A�<���L�X �ݕ�2.��cie��q�3p)��$1*�W�`���0I�g�N�ԁxD(#�}]��p���A<�-�Z��FN�r�{f&����5��\OyG��A�{&`����2�����b�A������-9i�j�r/�E�|UI9ÞݹB�#2o:=�n��Ӟv�H5.F��������x7��wQvٜy��_L��5��`�֡�������Ҧ+H��V�x%��q����x�aP��-�R�%�RW�f��w���]v.8ʭ�!�K���b#�
�皷&�ڢ�bo)1��i��G�5�lk�����:'�L,����މ~\ �y�o�P�=�ܹ;��wK�̈́C�n= �Y�-���"F�)��g`W܋�r*���«T?�/�z�����d�a)�����4$euFf8��l��1�7��)aFka�B}��j�f�zZ��}�g��4��0����YH��5�m.��D+/��n�(/�_]� k�]ӭCM^�y�(�8�؃�X3���Wb���^_=M�׏\\��t����%�4���`����[��05({;��nn��h]�&�ݒqo
?=��~7FƊ�,T�}2q�����b�P�0��^�x����ݔH��G q�wl�݅XH%j��W�|�Fx͡�y����F�ш��7��e�[��!=V���@^*�ID>              </td>
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