<!DOCTYPE html> 
<html lang="es">
<head>
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>SEGURIDAD</title> 

</head>
<body>
<link rel="stylesheet" href="style.css">

<div class="titulo">
<h2>SEGURIDAD</h2>
</div>

<div class="scri">
<form method="post" action="">
  <label for="conjunto1">usuario:</label>
  <input type="text"  name="conjunto1" placeholder="Ej. 2 3 4 5"><br><br>

  <label for="conjunto2">Contraseña:</label> 
  <input type="text" name="conjunto2" placeholder="Ej. 6 7 1 3"><br><br>

  
  <input type="submit" value="seguridad" name="enviar"> 
</form>
</div> 

<?php
if($_POST)
{
    $user = $_POST["conjunto1"];
    $pass = $_POST["conjunto2"];
    $conexion = mysqli_connect('localhost', 'root', '', 'sistema', '3306');
  
    $consulta = "SELECT * FROM Usuarios WHERE login = '$user' AND Password = sha1('$pass')" ;
    $resultado = mysqli_query($conexion, $consulta);
    $mostrar=mysqli_fetch_array($resultado);

  
    if($mostrar)
        echo "__________________SI PASO LA SEGURIDAD";
    else    
        echo "__________________NOOOOOO PASO LA SEGURIDAD";
    mysqli_close($conexion);
}

    
?>

</body>
</html>