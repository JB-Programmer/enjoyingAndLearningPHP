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

        //Con la herencia, el que hereda cuenta con las mismas variables y metodos que la clase padre, abuelo... etc.
        //AHORA VOY A CREAR LA CLASE CAMION PERO USANDO HERENCIA EN LUGAR DE REESCRIBIENDO, YA QUE AMBAS TIENEN
        //CARACTERISCIAS MUY PARECIDAS.
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
                return "Mi motor es".$this->motor.".<br>";
            }


            function establece_color($color_coche, $nombre_coche){
                $this->color = $color_coche;
                echo "El color de.".$nombre_coche." este coche es: ".$this->color.".<br>";
                
            }


        }


        //CAMION HEREDA TODO DE COCHE Y LUEGO SOBREESCRIBO LO QUE QUIERA.
        class Camion extends Coche{

            //Ahora ya tengo todas las variables y metodos que la clase coche. Imaginemos
            //si no queremos tener el metodo establece_color, ya que todos son del mismo color: Sobreescritura de metodos.
                //El constructor del camion si quiero que sea un poco diferente.
            public function __construct(){
                $this->ruedas = 8;    //El estado inicial es 4 ruedas.
                $this->color = "";      //El estado inicial esta sin definir.
                $this->motor = 2400;        //El estado inicial son 1600.


            }
        
            //SOBREESCRITURA DE METODOS. MACHACA EL HEREDADO
            //El metodo decir color no pega que este aqui con la palabra coche que es como lo heredo, por lo que voy a sobreescribirlo
            public function decirmotor(){
                 return "El motor de este CAMION es: ".$this->motor.".<br>";

            } 


            //PARENT: LLAMA AL METODO PADRE. Ahora quiero que el metodo arrancar sea parecido al anterior mas algo mas. 
            public function arrancar(){
                parent::arrancar(); //Le digo al codigo que lo primero que tiene que hacer es ejecutar el metodo de la clase padre
                echo "Estado actual: Arrancado. <br><br>";  //Ahora le agrego las instrucciones que yo quiera.
            }



        }


        $pegaso = new Camion();

        echo $pegaso->decirmotor();

        echo $pegaso->arrancar();





    ?>
</body>
</html>