<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hoteles en Ica | Hotel Casa Sur</title>
<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../../css/estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
<?

$destino="granhotelica@kbsoluciones.com.pe";
$nombre= $_POST["nombre"];
$mail= $_POST["email"];
$fono= $_POST["fono"];
$habitacion= $_POST["habitacion"];
$num_hab= $_POST["num_hab"];
$num_pers= $_POST["num_pers"];
$dia1= $_POST["dia1"];
$mes1= $_POST["mes1"];
$dia2= $_POST["dia2"];
$mes2= $_POST["mes2"];
$mensaje= $_POST["mensaje"];
$contenido="
Esta solicitud de RESERVA se ha generado en HOTELES EN ICA web: www.hotelesenica.com.pe.
Nombre          : " . $nombre . "
Correo          : " . $mail . "
Teléfono        : " . $fono . "
Habitación      : " . $habitacion . "
N° de Habitaciones  : " . $num_hab . "
N° de Personas  :  " . $num_pers . "
Fecha de Ingreso:
Día             : " . $dia1.  "
Mes             : " . $mes1. "
Fecha de Salida :
Día             : " . $dia2.  "
Mes             : " . $mes2. "
Comentario      : " . $mensaje."
Estimados Señores de Gran Hotel Ica, ponerse en contacto con el cliente.";
mail($destino, "Contacto desde HOTELES EN ICA", $contenido);
print "<meta http-equiv=Refresh content=\"2 ; url=gracias.html\">";
/*
header("Location: http://www.hotelesenica.com.pe/gran-hotel-ica/php/gracias.html");
*/
?>
</body>
</html>