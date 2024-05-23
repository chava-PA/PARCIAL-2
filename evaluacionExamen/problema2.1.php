<html>
    <body>
     <h1 align="center">17663. Practicando Funciones</h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     Dados tres números enteros X, Y y Z calcula el valor de h(X, Y y Z) si las funciones F,G,H
     están definidas así:


      <br><br>

      <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
  <mi>f</mi>
  <mo stretchy="false">(</mo>
  <mi>a</mi>
  <mo stretchy="false">)</mo>
  <mo>=</mo>
  <mn>4</mn>
  <msup>
    <mi>a</mi>
    <mn>3</mn>
  </msup>
  <mo>+</mo>
  <mi>g</mi>
  <mo stretchy="false">(</mo>
  <mn>2</mn>
  <mi>a</mi>
  <mo>,</mo>
  <mo>&#x2212;</mo>
  <mn>3</mn>
  <mi>a</mi>
  <mo stretchy="false">)</mo>
  <mo>,</mo>
</math>

    <br><br>
    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
  <mi>g</mi>
  <mo stretchy="false">(</mo>
  <mi>b</mi>
  <mo>,</mo>
  <mi>c</mi>
  <mo stretchy="false">)</mo>
  <mo>=</mo>
  <mo stretchy="false">(</mo>
  <mn>7</mn>
  <mi>b</mi>
  <mo>&#x2212;</mo>
  <mn>3</mn>
  <mo stretchy="false">)</mo>
  <mspace width="1em"></mspace>
  <mi>mod</mi>
  <mstyle scriptlevel="0">
    <mspace width="thinmathspace"></mspace>
  </mstyle>
  <mstyle scriptlevel="0">
    <mspace width="thinmathspace"></mspace>
  </mstyle>
  <mo stretchy="false">(</mo>
  <msup>
    <mi>c</mi>
    <mn>2</mn>
  </msup>
  <mo>+</mo>
  <mn>1</mn>
  <mo stretchy="false">)</mo>
  <mo>,</mo>
</math>

    <br><br>
    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
  <mi>h</mi>
  <mo stretchy="false">(</mo>
  <mi>x</mi>
  <mo>,</mo>
  <mi>y</mi>
  <mo>,</mo>
  <mi>z</mi>
  <mo stretchy="false">)</mo>
  <mo>=</mo>
  <mi>f</mi>
  <mrow data-mjx-texclass="INNER">
    <mo data-mjx-texclass="OPEN">(</mo>
    <mfrac>
      <mi>x</mi>
      <mi>y</mi>
    </mfrac>
    <mo data-mjx-texclass="CLOSE">)</mo>
  </mrow>
  <mo>+</mo>
  <mn>3</mn>
  <mstyle scriptlevel="0">
    <mspace width="thickmathspace"></mspace>
  </mstyle>
  <mi>g</mi>
  <mrow data-mjx-texclass="INNER">
    <mo data-mjx-texclass="OPEN">(</mo>
    <mfrac>
      <mi>z</mi>
      <mi>y</mi>
    </mfrac>
    <mo>,</mo>
    <mi>x</mi>
    <mo data-mjx-texclass="CLOSE">)</mo>
  </mrow>
  <mo>.</mo>
</math>

Usa enteros para realizar los cálculos, y mod
 es la operación residuo de la división (también llamada módulo).
  Los resultados de las operaciones deben coincidir con aquellos del lenguaje C.

    </p>
    
    <h2>ENTRADA</h2>
    <p> 
       Tres numeros enteron X,Y y Z separados por un espacio. Puedes suponer que 1 < z,y,z < 100
       y que no se producirán divisiones entre cero.

    </p>
    <h2>SALIDA</h2>
    <p>El entero obtenido de evaluar h(X, Y y Z) </p>
    <h2>EJEMPLO</h2>


    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
         


            <td><h4>SALIDA</h4></td>

          
        </tr>


                 <h2>Numeros a ingresar </h2>
                <form action="problema2.1.php" method="post">
                Dame los numero
                <br>
                X=
                <input type="text" name="txtdis1"> <br>
                y=
                <input type="text" name="txtdis2"> <br>
                z=
                <input type="text" name="txtdis3"> <br>
               
                <input type="submit" value="emviar"> <br>

                </form>
                <br><br>
        <tr >
            <td align="center"><?php 
            if($_POST)
            {
                $x=$_POST['txtdis1'];
                $y=$_POST['txtdis2'];
                $h=$_POST['txtdis3'];
                echo $x;
                echo $y;
                echo $z;
      
            }

            
                    
            
            
            
            
            
            ?></td>
            <td align="center"><?php

                    if($_POST)
                    {
                        function g($b,$c)
                        {
                            return ((7*(int)$b-3)%($c*$c+1));
                        }
                        function f($a)
                        {
                            return (4*pow((int)$a,3))+g(2*(int)$a,-3*(int)$a);
                        }
                        function h($x,$y,$z)
                        {
                            return f($x/$y)+3*g($z/$y,$x);
                        }
                
                
                        $x=$_POST['x'];
                        $y=$_POST['y'];
                        $z=$_POST['z'];
                        echo h($x,$y,$z);
                        echo "<br>variables: x: ",$x," y: ",$y," z: ",$z;


                    }
               

                    

                            

               
                     
        
            
            ?></td>
            

        </tr>
       
            
        
            
            
            
        </tr>
    
        
        
    </table>











</body>








</head>
    
    




                