<!-- EN ESTE ARCHIVO ES COMO EL ANTERIOR PERO HE CREADO UN CAMION, CON CARACTER PARECIDAS -->

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

        //this hace referencia al interior de la clase
        class Coche{

            public $ruedas;
            private $color;
            protected $motor;


            //Define el estado inicial. Le podria poner que necesitase parametros
            //Se puede omitir elc onstructor, pero en ese caso el objeto a su creaci'on quedaria vacio
            function __construct(){
                $this->ruedas = 4;    //El estado inicial es 4 ruedas.
                $this->color = "";      //El estado inicial esta sin definir.
                $this->motor = 1600;        //El estado inicial son 1600.


            }
            
            function arrancar(){
                echo "Estoy arrancando.<br>";
            }



            function decirnumeroderuedas(){
                echo "Yo tengo ".$this->ruedas." ruedas.<br>";
            }


            function decirmotor(){
                return "El motor de este coche es: ".$this->motor.".<br>";
            }


            function establece_color($color_coche, $nombre_coche){
                $this->color = $color_coche;
                echo "El color de.".$nombre_coche." este coche es: ".$this->color.".<br>";
                
            }


        }

        //_____________________________________________________


        class Camion{

            public $ruedas;
            private $color;
            protected $motor;


            //Define el estado inicial. Le podria poner que necesitase parametros
            //Se puede omitir elc onstructor, pero en ese caso el objeto a su creaci'on quedaria vacio
            function __construct(){
                $this->ruedas = 8;    //El estado inicial es 4 ruedas.
                $this->color = "";      //El estado inicial esta sin definir.
                $this->motor = 2400;        //El estado inicial son 1600.


            }
            
            function arrancar(){
                echo "Estoy arrancando.<br>";
            }



            function decirnumeroderuedas(){
                echo "Yo tengo ".$this->ruedas." ruedas.<br>";
            }


            function decirmotor(){
                return "Mi motor es".$this->motor.".<br>";
            }





        }


    ?>



</body>
</html>