<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hoteles en Ica | El placer de su estadía a precios económicos</title>
</head>

<body>
<?
$destino="contactos@hotelesenica.com.pe";
$nombre= $_POST["nombre"];
$mail= $_POST["mail"];
$fono= $_POST["fono"];
$mensaje= $_POST["mensaje"];
$contenido="Nombre: " . $nombre . "\n
Correo: " . $mail . "\n
Teléfono: " . $fono . "\n
Mensaje: " . $mensaje;

mail($destino, "Contacto desde formulario de HOTELES EN ICA", $contenido);
print "<meta http-equiv=Refresh content=\"2 ; url=gracias.html\">";
/*
header("Location: http://www.hotelesenica.com.pe/php/gracias.html");
*/
?>
</body>
</html>