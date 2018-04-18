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

        include '01vehiculos.php';

        $renault = new Coche(); //En este caso el constructor no recibe parametros, ver funcion constructora. Si no recibe 
                                //parametros, podria crearlo sin el parentesis.

        
        $pegaso = new Camion();


        echo "El renault tiene estas ruedas: ".$renault->ruedas.".<br>";

        echo "El pegaso tiene estas ruedas: ".$pegaso->ruedas.".<br>";


        echo $renault->color;






    ?>
</body>
</html>