
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
$email=$_POST['mail'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['mail']=$email;

$conexion=mysqli_connect("localhost","root","","tiendaropa") or
die("Problemas con la conexión");


$consulta="SELECT*FROM iniciosesion where mail='$email' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:lookbook.html");
}
else{
    ?>
    <?php
    include("login.html");
    ?>
    
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);



?>
</body>
</html>



