<!-- One of the advantadges of PDO is that we can create conections not 
only to MySql, even to Oracle and another database. 
PDO new PDO
OOP
MARCADORES :n_art Nos permite usar en execute un array asociativo cuando hay muchos parametros
ARRAYS ASOCIATIVOS 'Repasar video 30'
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO Conecting to object</title>
</head>
<body>
    
    <?php


        $cod=$_GET['c_art'];


        try{
/*          Creating connection to MySql. We will create an conexion type OBJECT
            called $base. One of his method is prepare, to create prepared queries. It needs
            a parameter (query). This method prepared give us a PDOStatement
            It is a recordset or virtual table. Later we need to execute it and
            finally we could fetch it */
            
            $base = new PDO('mysql:host=localhost; dbname=pruebas2', 'root', ''); //Conexion created
            
            //VERY IMPORTANT: this new attributes allow us to take the exceptions.
            // Now we can take that exceptions and see them properly in catch  
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //Hay Errmode_silent, warning o Exception
            
            //We are using utf8.
            $base->exec("SET CHARACTER SET utf8");

            $sql = "DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO = :c_art";

/*          With the method prepare that receive the sql, we will 
            receive a pdo statement object, that I will save in $result */
            $resultado = $base->prepare($sql);

            
            /* We need this line to insert.
           It associatesthe markers :c_art with the variables $cod*/
            $resultado->execute(array(':c_art'=>$cod));

            //OJO AÑADIR QUE PASA SI NO HAY AFFECTED ROW
            echo 'Hello<br>';
            $count = $resultado->rowCount();
            echo  $count." registro borrado";
           
/*         When there is an error in executing time (not because of typewritting mistake
            there is an exception).
            Si hay un error de este tipo, se genera un objeto que se llama objeto fallo
            Y como objeto, tambien tiene sus propiedades y sus metodos. Y para
            manejar estos errores, hay una estructura que es try catch, que en el 
            caso en el que se genera una excepcion, el catch hace con el fallo lo que
            yo le diga. El catch siempre recibe una excepcion y se escribe com
            puse a continuacion, le digo catch(Exception $e), es decir, coge ese error
            y haz lo que yo le diga*/


        }catch(Exception $e){
        
            //I will say to kill this proccess and to show us the error message.
            //We can access to functions of the object exception that allows us
            //to know what is happening. We use to call $e to that object.
            die('Error: '.$e->getMessage().".<br> Error code: ".$e->getCode().".<br> Line: ".$e->getLine()); //There is also get code, get file and get line
//ALPROFESOR POR QUE EN LA LINEA ANTERIOR NO ME LO HACE TODO EN ORDEN.


        //Finally is a code that i want to be executed in any case, even if there
        //has been an error. It includes generally the cleaning of the memory
        //that we have been using
        
        }finally{
            $base = null;
            echo "Proccess ended.<br>";

        }


    ?>


</body>
</html>