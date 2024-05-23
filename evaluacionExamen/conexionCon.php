<html>

<link rel="stylesheet" href="modificar.php">      
<link rel="stylesheet" href="style-iniciar.css">      


<head>



<body>

            <div class="letras-menu">
            <h1>CONEXION SEGURIDAD</h1>    
            <Li><a href="menu.html">MENU</a></Li>
                <Li><a href="conexionCon.php">Recargar La Pagina</a></Li>

            <H2>INGRESA USUARIO Y CONTRASEÑA</H2>
            </div>
         


</body>
</head>

<div class="scri">
<form method="post" action="">
  <label for="conjunto1">usuario:</label><br>
  <input type="text"  name="conjunto1"><br><br>

  <label for="conjunto2">Contraseña:</label> <br>
  <input type="text" name="conjunto2" ><br><br>

  
  <input type="submit" value="seguridad" name="enviar"> 
</form>
</div> 

<?php
if($_POST)
{
    $user = $_POST["conjunto1"];
    $pass = $_POST["conjunto2"];
    $conexion = mysqli_connect('localhost', 'root', '', 'SEGURIDAD', '3306');
  
    $consulta = "SELECT * FROM usuarios WHERE usuario = '$user' AND contraseña = sha1('$pass')" ;
    $resultado = mysqli_query($conexion, $consulta);
    $mostrar=mysqli_fetch_array($resultado);

  
    if($mostrar){
        echo "------------------------------------------------------------------------------------------------SI PASO LA SEGURIDAD-------------------------------------------------------------------------------------------";
            
          echo '<br><br>';
            echo '<div class="letras-menu">';
          echo '<li><a href="modificar.php">A MODIFICAR</a></li>';
          echo '</div>';
    }
    else
    { 

        echo "-----------------------------------------------------------------------------------------NOOOOOO PASO LA SEGURIDAD--------------------------------------------------------------------------------------";
    }
    mysqli_close($conexion);

}

    
?>



</html>