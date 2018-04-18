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


            //Define el estado inicial
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
                return "Mi motor es".$this->motor.".<br>";
            }


            function establece_color($color_coche, $nombre_coche){
                $this->color = $color_coche;
                echo "El color de.".$nombre_coche." este coche es: ".$this->color.".<br>";
                
            }


        }


        //Con el operador new hago una llamada al constructor.

        $volvo = new Coche();  //Tendran las caracteristicas iniciales del constructor
        $mazda = new Coche();
        $seat = new Coche();


        //Ahora quiero que alguna de nuestras instancias arranque o diga su numero de ruedas.
        $volvo->arrancar();
        $volvo->decirnumeroderuedas();

        //Accedo a la variable
        echo $volvo->ruedas." ruedas tengo yo.<br>";
        echo $volvo->decirmotor();


        //Establezco desde funcion, ya que es protected y no podria hacer $volvo->color
        $volvo->establece_color("Azul", "Volvo");
        

        $seat->establece_color("Amarillo", "Seat");
        

        //echo $volvo->color.".<br>";


        

    ?>



</body>
</html>