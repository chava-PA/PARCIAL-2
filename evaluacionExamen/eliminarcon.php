<html>

<link rel="stylesheet" href="modificar.php">         
<link rel="stylesheet" href="style-eliminar.css">      


<head>



<body>
            <div class="letras-menu">
            <h1>ELIMINA  DATOS  DE  LA  TABLA  ALUMNOS</h1>    
            <Li><a href="modificar.php">regresar a la modificacion</a></Li>
                <Li><a href="eliminarcon.php">Recargar La Pagina</a></Li>

            <H2>INGRESA  LA  MATRICULA  A  ELIMINAR</H2>
            </div>

         


</body>
</head>

<div class="scri">
<form method="post" action="">
  <label for="conjunto1">MATRICULA:</label>
  <input type="text"  name="conjunto1"><br><br>


  
  <input type="submit" value="ELIMINAR Y RECARGAR TABLA" name="enviar"> 
</form>
</div> 

<?php
if($_POST)
{
    $matri = $_POST["conjunto1"];
  
    $conexion = mysqli_connect('localhost', 'root', '', 'SEGURIDAD', '3306');
  
    $consulta = "DELETE FROM ALUMNOS WHERE matricula = '$matri';";
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





