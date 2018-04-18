<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php

        $thestring = "Buenas tArdEs<br>";

        echo $thestring;

        strtolower($thestring);


        echo $thestring;

        $newstring = strtolower($thestring);

        echo $newstring;
        

        function suma($num1, $num2){

            $resultado = $num1 + $num2;

            return $resultado;

        }

       
        echo  suma(3, 5)."<br>";

        //Funcion polivalente en funcion de lo que le pase al segundo parametro.
        function frase_mayus($frase, $conversion=true){

            $frase = strtolower($frase);

            if($conversion==true){
                $resultado = ucwords($frase);
            }else{
                $resultado = strtoupper($frase);
            }

            return $resultado;
        }

        echo(frase_mayus("Esto es una prueba", false))."<br>";

        //Parametros por valor y parametros por referencia.

            //Por valor function ejemplo($param){  $param++; }

            //Por referencia function ejemplo(&$param){  $param++; }  ASPERSANT
        
       
        function incrementa($valor1){

            $valor1++;
            return $valor1;

        }

        $numero = 5;
        $resultadoch = incrementa($numero);

        echo $resultadoch;

        echo "<br><br>";

        //Aplique al numero el valor
        echo $numero;  //return 5, el valor de num no cambia.

        //OJO, SI AHORA A LA FUNCION LE PONGO ASI, LO RECIBO POR REFERENCIA. ANTES, LA FUNCION NO SABE LO QUE ES $NUMERO, SINO QUE COGE DIRECTAMENTE EL 5.

        echo "<br><br>Ahora por referencia, el valor de la variable queda modificado a traves de la funcion.<br><br>";
        function incrementaporreferencia(&$valor1){

            $valor1++;
            return $valor1;

        }

        $numporrefer = 5;
        $resultadoch = incrementaporreferencia($numporrefer);

        echo $resultadoch;

        echo "<br><br>";

        //Aplique al numero el valor
        echo $numporrefer;
        


    ?>


</body>
</html>