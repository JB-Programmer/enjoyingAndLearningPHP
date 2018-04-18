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
        //Modularizar es dividir un programa en pequenas clases que funcionen como una undidad.
        
        //ENCAPSULACION
        
        //Para poder encapsular necesitamos utilizar modificadores de acceso: public, private, protected.



        //La clase coche del archivo vehiculos.php tiene un constructor con 4 ruedas, color sin definir y motor 1600. Un coche no puede tener nunca 5 ruedas, 
        //entonces tengo que preocuparme de que nadie pueda decir que ninguna instancia de coche tenga 10 ruedas.


        //Veo que seria un error permitir que las ruedas fueran 9

        //Entonces voy a agregarle la propiedad private a ruedas, para que esta
        //variable sea solo accesible desde la propia clase.
        //Eso si, si pienso hacer de esta na superclase voy a tener que hacerla protected :)

        class CochesConRuedasFijas{
            
            //Si no hay modificador en la variable o en la funcion, se considerara public
            private $ruedas;
            private $color;
            public $motor;


            //Define el estado inicial. Le podria poner que necesitase parametros
            //Se puede omitir elc onstructor, pero en ese caso el objeto a su creaci'on quedaria vacio
            function __construct(){
                $this->ruedas = 4;    //El estado inicial es 4 ruedas.
                $this->color = "";      //El estado inicial esta sin definir.
                $this->motor = 1600;        //El estado inicial son 1600.


            }
            
            //Ahora estoy obligado a crear una funcion si quiero poder obtener el numero de ruedas, es un getter.
            public function getRuedas(){
                return $this->ruedas;
            }


            //Voy a tener tambien que crearle un set
            public function setRuedas($ruedas){
                $this->ruedas = $ruedas;
            }


            function arrancar(){
                echo "Estoy arrancando.<br>";
            }



            function decirmotor(){
                return "El motor de este coche es: ".$this->motor.".<br>";
            }


        }




        $mazda4Ruedas = new CochesConRuedasFijas();

        echo "Con funcion Getter: ".$mazda4Ruedas->getRuedas().".<br><br>";

        //Vemos como devolver directamente el numero de ruedas no funcionaria

        //echo "Acceso directo a la variable private: ".$mazda4Ruedas->ruedas.". DEVUELVE ERROR<br><br>";;
        
        //Ahora quiero incluirle una rueda mas, la de repuesto.
        $mazda4Ruedas->setRuedas(5);
        echo "Ahora anadi la rueda de repuesto, entonces tengo ".$mazda4Ruedas->getRuedas()." ruedas en total.<br><br>";




    ?>



</body>
</html>