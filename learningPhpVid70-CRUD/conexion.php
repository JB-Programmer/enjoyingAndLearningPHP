<?php


class Conexion{

    public $base;

    function __construct(){
            try {

                $this->base = new PDO('mysql:host=localhost; dbname=theschool', 'root', '');

                $this->base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->base->exec("SET CHARACTER SET UTF8");

                echo "Connected to DB";




            }catch(Exception $e){
                die('Error!!'.$e->getMessage());
                echo "Line del fallo: ".$e->getLine();



            }

            return $this->base;

    }
}

?>