<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- FALTA ACTUALIZARLO A LA BASE DE DATOS DE LA PC DE LA ESCUELA Y PONER LAS COLUMNAS CORRECTAS (por que son diferentes bases de datos) ademas falta poner la imprimision de iniciado correctamente o erronea y front -->
</head>
<body>
<?php

$conexion=mysqli_connect("localhost","root","","tiendaropa") or
 die("Problemas con la conexión");
 $registros=mysqli_query($conexion,"select nombre,mail,contraseña
 from alumnos where mail='$_REQUEST[nombre1]'") or
$registros=mysqli_query($conexion,"select nombre,mail,contraseña
 from alumnos where mail='$_REQUEST[mail1]'") or
 die("Problemas en el select:".mysqli_error($conexion));
 $registros=mysqli_query($conexion,"select nombre,mail,contraseña
 from alumnos where mail='$_REQUEST[contraseña1]'")
 


?>
</body>
</html>