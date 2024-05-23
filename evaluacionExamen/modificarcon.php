<html>

<link rel="stylesheet" href="modificar.php">            
<link rel="stylesheet" href="style-modifi.css">      


<head>



<body>
            <div class="letras-menu">
            <h1>MODIFICA CON MATRICULA</h1>    
            <Li><a href="modificar.php">regresar a la modificacion</a></Li>
                <Li><a href="modificarcon.php">Recargar La Pagina</a></Li>

            <H2>INGRESA LOS DATOS PARA PODER MODIFICAR</H2>

         </div>


</body>
</head>

<div class="scri">
<form method="post" action="">

    <h3>Ingresa la matricula del alumno a modificar</h3>
  <label for="conjunto1">Matricula:</label>
  <input type="text"  name="conjunto1"><br><br>

  
  <h4>ejemplo de los nombres de las columnas (preferencia copiar y pegar)</h4>
   <h4>
    | apellido_paterno | apellido_Materno | nombre | fecha_de_nacimiento | direccion | telefono | correo | padre_o_tutor |   </h4>
  <label for="conjunto2">$columna:</label>
  <input type="text"  name="conjunto2"><br><br>


  


  <label for="conjunto3">Ingresa lo que vas a cambiar:</label> 
  <input type="text"  name="conjunto3"><br><br>
 

  
  <input type="submit" value="MODIFICAR Y RECARGAR TABLA" name="enviar"> 
</form>
</div> 

<?php
if($_POST)
{




    $columna = $_POST["conjunto2"];
    $modificacion  = $_POST["conjunto3"];
    $matricula = $_POST["conjunto1"];
   
   

    
    

    $conexion = mysqli_connect('localhost', 'root', '', 'SEGURIDAD', '3306');
  
    $consulta = "UPDATE alumnos SET $columna = '$modificacion' WHERE matricula = '$matricula';";
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