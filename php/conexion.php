<?php

/*$host="localhost";
$user="bloghotelesenica";
$password="1234@Blog";
$db="bloghotelesenica";
--cadena de conexion para wordpress--
*/
$host="localhost";
$user="root";
$password="";
$db="bloghotelesenica";
/* cadena de manera local */

$con=mysqli_connect($host,$user,$password,$db) or die("error al conectar a la base de datos");
mysqli_set_charset($con,"utf8");


?>
