<html>

<!--<link rel="stylesheet" href="modificar.php"> -->  
<link rel="stylesheet" href="style-registrar.css">


<head>




<body>
            <div class="letras-menu">
            <h1>REGISTRATE</h1>    
            <Li><a href="menu.html">MENU</a></Li>
                <Li><a href="registrateCon.php">Recargar La Pagina</a></Li>

            <H2>INGRESA TUS DATOS</H2>

            </div>


</body>
</head>

<div class="scri">
<form method="post" action="">
  <label for="conjunto1">NOMBRE:</label>
  <input type="text"  name="conjunto1"><br><br>

  <label for="conjunto2">USUARIO:</label> 
  <input type="text" name="conjunto2" ><br><br>

  <label for="conjunto3">CORREO:</label> 
  <input type="text" name="conjunto3" ><br><br>

  <label for="conjunto4">CONTRASEÑA:</label> 
  <input type="text" name="conjunto4" ><br><br>

  
  <input type="submit" value="REGISTRARSE" name="enviar"> 
</form>
</div> 

<?php
if($_POST)
{
    $nombre = $_POST["conjunto1"];
    $usuario = $_POST["conjunto2"];
    $correo = $_POST["conjunto3"];
    $contra = $_POST["conjunto4"];
    
    $conexion = mysqli_connect('localhost', 'root', '', 'SEGURIDAD', '3306');
  
    $consulta = "INSERT INTO usuarios VALUES ('$nombre','$usuario','$correo', sha1('$contra'));";
    $consulta2 = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = sha1('$contra')" ;

    $resultado = mysqli_query($conexion, $consulta);
    $resultado2 = mysqli_query($conexion, $consulta2);
    $mostrar=mysqli_fetch_array($resultado2);
   
    

   
    

  
   if($mostrar){
       echo "------------------------------------------------------------------------------------------------REGISTRADO CORRECTAMENTE-----------------------------------------------------------------------------";
            
          echo '<br><br>';
            
          echo '<div class="letras-menu">';
           echo '<li><a href="conexionCon.php">AHORA PUEDES INISIAR SECION</a></li>';
           echo '</div>';
    }
    else
    { 

         echo "------------------------------------------------------------------------------------------------NO REGISTRADO------------------------------------------------------------------------------------------------";
     }
    mysqli_close($conexion);

}

    
?>



</html>