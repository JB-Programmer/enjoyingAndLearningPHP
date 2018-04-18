<?php
    include_once '02conexion.php';

    class GiveRegisters extends Conexion{


        public function __construct(){

            parent::__construct();
            
        }

        public function get_registers(){
            $sql = 'SELECT * FROM PRODUCTOS';
            //EXAMPLE IF I DONT NEED ALL THE DATA PARA EL PROYECTO PUEDE SER UTIL PARA QUE NO ME  DEVUELVA TODOS LOS ROLES
            $sql = "SELECT * FROM PRODUCTOS WHERE SECCIÓN = 'DEPORTES' AND PAÍSDEORIGEN = 'USA'";


/*          With the method prepare that receive the sql, we will 
            receive a pdo statement object, that I will save in $result */
            $resultado = $this->conexion_db->prepare($sql);

            /* Now I execute that object with the ? inside. This array is built
            automatically with the parameters in the order of the ??? I inserted 
            UPDATED: MADE WITH MARCADORES*/
            $resultado->execute(array());
            //Example with markers PARA EL PROYECTO SI USE MARCADORES$resultado->execute(array(':seccion'=>$seccion, ':pais'=>$pais));
            textdebug('hello');

            //I want to save the result in a array and return it without showing it
            $arrayData = $resultado->fetchAll(PDO::FETCH_ASSOC);
        
            return $arrayData;



        }





        
    }

//For testing purposes



?>