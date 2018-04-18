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

        require_once '03devuelveproductos.php';
                
        $test = new GiveRegisters();

        //I keep in $products the data I get in the while.
        $productos = $test->get_registers();
        
        //Showing the array.
        foreach ($productos as $row => $column) {
            echo  "<p>NombreArticulo: ".$column['NOMBREARTÍCULO'];
            if(false){
                echo ". Precio: ".$column['PRECIO'];
            }
            echo "</p>";
            }

    ?>
</body>
</html>