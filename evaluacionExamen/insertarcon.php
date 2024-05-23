<html>

<link rel="stylesheet" href="modificar.php">       
<link rel="stylesheet" href="style-insertar.css">       


<head>




<body>
            <div class="letras-menu">
            <h1>SECCION DE INSERTAR DATOS</h1>    
            <Li><a href="modificar.php">regresar a la modificacion</a></Li>
                <Li><a href="insertarcon.php">Recargar La Pagina</a></Li>

            <H2>ingresa los datos a gregar</H2>
            </div>

         


</body>
</head>

<div class="scri">
<form method="post" action="">
  <label for="conjunto1">Matricula:</label>
  <input type="text"  name="conjunto1"><br><br>

  <label for="conjunto2">apellido_Paterno:</label> 
  <input type="text" name="conjunto2" ><br><br>

  <label for="conjunto3">apellido_Materno:</label> 
  <input type="text" name="conjunto3" ><br><br>

  <label for="conjunto4">Nombre:</label> 
  <input type="text" name="conjunto4" ><br><br>

  <label for="conjunto5">fecha_de_nacimiento:</label> 
  <input type="text" name="conjunto5" ><br><br>

  <label for="conjunto6">Direccion:</label> 
  <input type="text" name="conjunto6" ><br><br>

  <label for="conjunto7">Telefono:</label> 
  <input type="text" name="conjunto7" ><br><br>

  <label for="conjunto8">Correo:</label> 
  <input type="text" name="conjunto8" ><br><br>

  <label for="conjunto9">Padre_o_Tutor:</label> 
  <input type="text" name="conjunto9" ><br><br>





  
  <input type="submit" value="INSERTAR" name="enviar"> 
</form>
</div> 

<?php
if($_POST)
{
    $matricula = $_POST["conjunto1"];
    $apellidoPaterno = $_POST["conjunto2"];
    $apellidoMaterno = $_POST["conjunto3"];
    $nombre = $_POST["conjunto4"];
    $fechadeNacimiento = $_POST["conjunto5"];
    $direccion = $_POST["conjunto6"];
    $telefono = $_POST["conjunto7"];
    $correo = $_POST["conjunto8"];
    $padreotutor = $_POST["conjunto9"];

    $conexion = mysqli_connect('localhost', 'root', '', 'SEGURIDAD', '3306');
  

    $consulta = "INSERT INTO alumnos VALUES ('$matricula','$apellidoPaterno','$apellidoMaterno','$nombre','$fechadeNacimiento','$direccion','$telefono','$correo','$padreotutor');";
   $resultado = mysqli_query($conexion, $consulta);
   
   $consulta2 = "SELECT * FROM alumnos";
   $resultado2 = mysqli_query($conexion, $consulta2);
    echo "<div class='tabla'>";
   echo "<table border='1' style='margin: 30px;'>";
   echo "<tr class='tabla-info'>
            <td>Matricula</td>
            <td>Apellido_Paterno</td>
            <td>Apellido_Materno</td>
            <td>Nombre</td>
            <td>Fecha_de_Nacimiento</td>
            <td>Direccion</td>
            <td>Telefono</td>
            <td>Correo</td>
            <td>Padre_o_tutor</td></tr>";
        echo "</div>";

            while($mostrar = mysqli_fetch_array($resultado2)){
              echo "<div class='tabla'>";
               echo "<tr>";
               echo "<td> <p style='color: black;'>" . $mostrar['matricula'] . "</p></td>";
               echo "<td> <p style='color: black;'>" . $mostrar['apellido_paterno'] . "</p></td>";
               echo "<td> <p style='color: black;'>" . $mostrar['apellido_Materno'] . "</p></td>";
               echo "<td> <p style='color: black;'>" . $mostrar['nombre'] . "</p></td>";
               echo "<td> <p style='color: black;'>" . $mostrar['fecha_de_nacimiento'] . "</p></td>";
               echo "<td> <p style='color: black;'>" . $mostrar['direccion'] . "</p></td>";
               echo "<td> <p style='color: black;'>" . $mostrar['telefono'] . "</p></td>";
               echo "<td> <p style='color: black;'>" . $mostrar['correo'] . "</p></td>";
               echo "<td> <p style='color: black;'>" . $mostrar['padre_o_tutor'] . "</p></td>";
               echo "</tr>";
               echo "</div>";
            }
            echo "</table>";
            




    mysqli_close($conexion);

}

    
?>



</html>