<html>
    <body>
     <h1 align="center">11823. Evaluando Una Función Rara</h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     Evaluar de forma correcta f(X) dado el valor de X
      <br><br>

        <img src="data:image/png;base64,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" alt="">


    </p>
    
    <h2>ENTRADA</h2>
    <p> 
        Un entero -100 < x < 100 el valor a utilizar para evaluar F(X).

    </p>
    <h2>SALIDA</h2>
    <p>el resultante de F(X) </p>
    <h2>EJEMPLO</h2>


    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
         


            <td><h4>SALIDA</h4></td>

          
        </tr>


                 <h2>Numeros a ingresar </h2>
                <form action="FUNCION.php" method="post">
                Dame el numero binario.
                <br>
                <input type="text" name="txtdis1"> <br>
               
                <input type="submit" value="emviar"> <br>

                </form>
                <br><br>
        <tr >
            <td align="center"><?php 
            if($_POST)
            {
                $n=$_POST['txtdis1'];
                echo $n;
      
            }

            
                    
            
            
            
            
            
            ?></td>
            <td align="center"><?php

                    if($_POST)
                    {
                        if($n <= 0.0){

                            $r1=pow($n,2)-$n;

                            echo $r1;
                        }
                        else if ($n>0)
                        {
                            $n=$n*-1;
                            $r2=pow($n,2)+(3*$n);
                            $r2=$r2*-1;
                            echo $r2;
                        }
                        


                    }
               

                    

                            

               
                     
        
            
            ?></td>
            

        </tr>
       
            
        
            
            
            
        </tr>
    
        
        
    </table>











</body>








</head>
    
    




                