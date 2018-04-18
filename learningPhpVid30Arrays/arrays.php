<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>

        <?php

    //DEFINIR ARRAYS

        //En php hay arrays:
        
        //ARAYS INDEXADOS en el que se usan indices (entre corchetes, con valor numerico) echo $misvalores['0'] para referirnos a cada una de las posiciones
        //y Arrays asociativos, en los que entre corchetes utilizaremos el nombre asociado echo $misvalores['posicion1']

        //PHP me permite no indicar el indice y va asignando indice numerico en el orden en el que fue insertado
        //Hay que tener cuidado con no olvidarse un indice
        $semana[]="Lunes";  

        $semana[]="Martes";

        $semana[]="Miercoles";


        echo $semana[1]."<br><br>";


        //Otras formas de definir un array indexado
        $mesesUnaForma[1]="Enero";
        $mesesUnaForma[2]="Febrero";
        $mesesUnaForma[3]="Marzo";

        //Otra forma de definir el mismo array
        $mesesOtraForma = array("Enero", "Febrero", "Marzo");  //Comenzaria en el cero


        echo "Meses una forma, primer mes: ".$mesesUnaForma[1].".<br><br>";

        echo "Meses otra forma, primer mes: ".$mesesOtraForma[0]."<br><br>";//



        //ASOCIATIVOS, LAS POSICIONES NO QUEDAN IDENTIFICADAS CON UN INDICE NUMERAL, SINO CON UN NOMBRE

        $datos = array("Nombre"=>"Jaime", "Apellido"=>"Apellido1", "Edad"=>"Edad");

        echo "Este es mi apellido: ".$datos["Apellido"].". Un saludo.<br><br>";



    //PREGUNTAR SI ES UN ARRAY is_array


        if(is_array($datos)==true){
            echo "\$datos es un array.";
        }else{
            echo "No es un array";
        }

    echo "<br><br>";

    //RECORRER UN ARRAY INDEXADO

        for ($i=0; $i<count($semana); $i++){
            echo "Recorriendo dias de la semana, array indexado: ".$semana[$i]."<br>";
        }

    echo "<br><br>";

    //AGREGAR UN ELEMENTO A ARRAY INDEXADO

        $semana[]="Jueves";
    
    
    
    //RECORRER UN ARRAY ASOCIATIVO

        foreach($datos as $key=>$value){
            
            echo "Recorriendo array asociativo: a la clave ".$key." le corresponde el valor ".$value.".<br>";
        }


    echo "<br><br>";

    //AGREGAR ELEMENTO A ARRAY ASOCIATIVO
        
        $datos["Pais"]="Espana";

    
    //ORDENAR ELEMENTOS DEL ARRAY, POR EJEMPLO, LOS DIAS DE LA SEMANA ALFABETICAMENTE.

        
    sort($semana);

     echo "Dias de la semana ordenados alfabeticamente: <br>";

    for ($j=0; $j<count($semana); $j++){
        echo "Recorriendo dias de la semana, array indexado: ".$semana[$j]."<br>";
    }
    

    session_start();


    $_SESSION['testuserconnected']=[];

    $_SESSION['testuserconnected']['name']="Jaime";

    $_SESSION['testuserconnected']['id']="123";


    //PRINT BIDIMENSIONAL ARRAY:

    foreach($_SESSION as $primeraclave=>$segundaclave){
        echo $primeraclave."<br>";
        while(list($clave,$valor)=each($segundaclave)){  //While there are elementes of key value in the last step
            echo $clave." = ".$valor."<br>";
        }
        echo "<br>";

    }

    
    ?>


    


</html>

