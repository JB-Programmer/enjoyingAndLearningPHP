

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conectando a la Base de Datos Orientado a Objetos</title>
</head>
<body>
/* Here we will compare another method with poo method */

    <?php

        $conexion = new mysqli("localhost", "root", "", "pruebas2");

        //What to respond if connection is not successfull
        //If $conexion calls to the error function, echo message and
        //show the eror produced.
        if($conexion->connect_errno){
            echo "Conexion failed <br> Error: ".$conexion->connect_errno;
            
        }//Now if it has not called to connect errno, the code continues.

//It was the procedimental style
    //mysqli_set_charset($conexion, "utf8");

        //Now, with POO, the object conexion has a method that ask for a charset
        $conexion->set_charset("utf8");

        //We are going to create the SQL instruction:
        $sql = "SELECT * FROM PRODUCTOS";


//It was the procedimental style
    //$resultados = mysqli_query($conexion, $sql);

        //Now, the object connection has a function that "takes" the query
        $resultado = $conexion->query($sql);

        //If the conexion query has an error, die the error
        if($conexion->errno){
            die($conexion->errno);
        }

//It was the procedimental style
    //while($fila=mysqli_fetc_array($resultados, MYSQL_ASSOC)){etc...}

        //Now, we are going to fetch que query
        while($filaasociativa=$resultado->fetch_assoc()){
            echo "<tr><td>";
            echo $filaasociativa['CÓDIGOARTÍCULO']."</td><td>";
            echo $filaasociativa['NOMBREARTÍCULO']."</td><td> ";
            echo $filaasociativa['PAÍSDEORIGEN']."</td><td> ";
            echo $filaasociativa['IMPORTADO']."</td><td>";
            echo $filaasociativa['PRECIO']."</td>";
            echo "<tr>";
            echo "<br><br>";

        }
//It was the procedimental
    //mysqli_close($conexion);

        //Now we have a method ready in the object
        $conexion->close();




    ?>
</body>
</html>