<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","tiendaropa") or
die("Problemas con la conexión");

mysqli_query($conexion,"insert into iniciosesion(nombre,mail,contraseña) values 
('$_REQUEST[nombre1]','$_REQUEST[mail1]','$_REQUEST[contraseña1]')")
or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "registrado correctamente.";



?>
    <form action="inicio.html" method="post">
    <input type="submit" value="ir a inicio sesion">
</form>

</body>
</html>