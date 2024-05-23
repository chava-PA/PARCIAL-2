<html>
    <body>
     <h1 align="center">1037. Juego de letras </h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     En cierto juego de computadora cada letra del alfabeto recibe un valor numérico relativo a su 
     posición en el teclado: las letras Q, A y Z reciben el valor 1, las letras W, S y X reciben el valor 2,
     y así sucesivamente hasta que las letras O y L reciben el valor 9
     y la letra P recibe el valor 0, Una palabra formada por estas letras recibe como valor la suma de los 
     valores de las letras que la forman. Por ejemplo, la palabra UAM recibe como valor
        7+1+7 = 15. Escribe un programa que determine el valor V
       de una palabra P
    </p>
    
    <h2>ENTRADA</h2>
    <p> 
        Una cadena P formada exclusivamente por letras mayúsculas de la A a la Z. La cadena P,
        no contendrá eñes, acentos ni ningún otro símbolo. La cadena P medira entre 1 y 1000 letras-
    </p>
    <h2>SALIDA</h2>
    <p>Un numero entero V </p>
    <h2>EJEMPLO</h2>


    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
         


            <td><h4>SALIDA</h4></td>

          
        </tr>


                 <h2>Numeros a ingresar </h2>
                <form action="juego_De_palabras.php" method="post">
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
                $t=strlen($n);
            }

            
                    
            
            
            
            
            
            ?></td>
            <td align="center"><?php

                    if($_POST)
                    {
                        
                        $cont=0;
                     


                        for($i=0; $i<$t; $i++)
                        {
                            if($n[$i] == 'Q' || $n[$i] == 'A' || $n[$i] == 'Z')
                            {
                                $cont=$cont+1;
                            }

                            else if($n[$i] == 'W' || $n[$i] == 'S' || $n[$i] == 'X')
                            {
                                $cont=$cont+2;
                            }
                            
                            else if($n[$i] == 'E' || $n[$i] == 'D' || $n[$i] == 'C')
                            {
                                $cont=$cont+3;
                            }
                            else if($n[$i] == 'R' || $n[$i] == 'F' || $n[$i] == 'V')
                            {
                                $cont=$cont+4;
                            }
                            else if($n[$i] == 'T' || $n[$i] == 'G' || $n[$i] == 'B')
                            {
                                $cont=$cont+5;
                            }
                           else if($n[$i] == 'Y' || $n[$i] == 'H' || $n[$i] == 'N')
                            {
                                $cont=$cont+6;
                            }
                            else if($n[$i] == 'U' || $n[$i] == 'J' || $n[$i] == 'M')
                            {
                                $cont=$cont+7;
                            }
                            else if($n[$i] == 'I' || $n[$i] == 'K')
                            {
                                $cont=$cont+8;
                            }
                           else  if($n[$i] == 'O' || $n[$i] == 'L')
                            {
                                $cont=$cont+9;
                            }
                            else if($n[$i] == 'P')
                            {
                                $cont=$cont+0;
                            }
                            
                        }

                        echo $cont;
                       


                    }
               

                    

                            

               
                     
        
            
            ?></td>
            

        </tr>
       
            
        
            
            
            
        </tr>
    
        
        
    </table>











</body>








</head>
    
    




                