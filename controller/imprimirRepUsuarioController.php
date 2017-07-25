<?php
require_once 'public/pdfClasses/class.pdf.php';
require_once 'public/pdfClasses/class.ezpdf.php';
require_once 'model/usuarioModel.php';
$pdf =new Cezpdf('a3');
//seleccionamos la fuente
$pdf->selectFont('public/pdfClasses/fonts/Helvetica.afm');
//seteamos la información del documento que se creará
$datacreator = array(
    'Title' => 'Reporte USUARIOS PDF',
    'Author' => 'Andreina Delgado',
    'Subject' => 'Reporte Usuarios PDF',
    'Creator' => 'elandelo83@gmail.com',
    'Producer' => ''
);
$pdf->addInfo($datacreator);
//traemos la data de nuestra base de datos
$u = new Usuarios();
$meses = $u->get_meses();
$tipos = $u->get_tipos();
$datos = $u->get_Usuarios();
/* $dompdf= new DOMPDF();
  $dompdf->load_html_file("vista/RepUsuariosSalida.php");
  $dompdf->render();
  $dompdf->stream("RepUsuariosfmn.pdf");
  require_once 'vista/RepUsuarios.php';
 */
function puntos_cm ($medida, $resolucion=72)
{
   //// 2.54 cm / pulgada
   return ($medida/(2.54))*$resolucion;
}
//cargamos la información en el array multidimensional llamado data
for ($i = 0; $i < sizeof($meses); $i++) {
    if (date("m") == $meses[$i]["id_mes"]) {
        $mes = $meses[$i]["mes"];
    }
}
$fecha= date("d")."/".$mes."/". date("Y"); 
for ($i = 0; $i < sizeof($datos); $i++) {//inicio for
    $data[] = array
        (
        "cedula" => utf8_decode($datos[$i]["ci_usu"]),
        "nombre" => utf8_decode($datos[$i]["nom_usu"]),
        "apellido" => utf8_decode($datos[$i]["ape_usu"]),
        "cargo" => utf8_decode($datos[$i]["cargo_usu"])
    );
}//fin for
$titles = array
    (
    "cedula" => utf8_decode("Cédula"),
    "nombre" => "Nombre",
    "apellido" => "Apellido",
    "cargo" => "Cargo Usuario"
    
);

$options = array(
    'shadeCol' => array(0.9, 0.9, 0.9), //Color de las Celdas.
    'xOrientation' => 'center', //El reporte aparecerá Centrado.
    'width' => 700//Ancho de la Tabla.
);
//ponemos un título, 0, 200, 'full', 'center'
$pdf->ezText("<b>Reporte de Usuarios</b>\n ", 16);


//creamos la tabla dentro del pdf
$pdf->ezTable($data, $titles, 'Listado de Usuarios', $options);
//mostramos el pdf
//$documento_pdf = $pdf->ezOutput();
//$fichero = fopen('public/reportes/repUsuario.pdf','wb');
//fwrite ($fichero, $documento_pdf);
//fclose ($fichero);
$pdf->ezText("\n\n\n",10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"),10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n",10);

$pdf->stream();

?>