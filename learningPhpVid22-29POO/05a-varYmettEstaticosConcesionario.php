<?php
        //Metodos estaticos

/*         VAmos a hacer una simulacion en la que tenemos un concesionario de coches y tenemos que vender a los
		clientes. Para ello hemos creado una clase que es Compra vehiculos. Dentro de esta clase hay un constructor, que, 
		en funcion  de la gama que quiera el cliente, va a tener un precio base diferente. Para ello utilizamos un 
        parametro $gama.

            Ademas del constructor, tengo parametros que suman el precio, por ejemplo, si quiere navegador
        o si quiere tapiceria tambien va subiendo el precio, en funcion del color de tapiceria que quiera.

            Al final tengo una funcion que lo que hace es devolver el precio base hasta ese momento.
 */
	class Compra_vehiculo{
		
		private $precio_base;
		/* Imaginemos que uno de los metodos de la clase lo defino como estatico.
	Entonces si lo defino estatico en una clase, ningun objeto lo podria modificar, seria un metodo
	compartido para cada instancia, para cada objeto el metodo es el mismo, porque pertenece a la clasa y no va a ser de las instancias.
	 
		Vamos a suponer que en la clase vamos poner un descuento, que es algo que hace el gobierno
		para la compra de vehiculos.
		Ese descuento, por ejemplo de 4500 va a ser siempre el mismo. Podria crear un variable o campo estatico que
		vamos a compartir con cada una de las clases.

		Los objetos que pertenezcan a la clase no van a tener la propia copia, sino que ese metodo va a depender
		de la clase. Ahora el precio final quiero que me devuelva el precio base menos el descuento
	*/
		private static $ayuda=0;  	//Por defecto seria  un campo publico, aunque pertenezca a la clase, por lo que habria
								//riesgo de manipulacion, podria cambiarlo escribiendo desde fuera de la clase
								// Compra_vehiculo::$ayuda = 10000;
								//Y asi estaria modificando esta variable publica.
								//Al ser un descuento obligatorio del gobierno, tiene sentido que sea una variabl
								//estatica, para que no se pueda modificar dentro de ninguna instancia.
		
				
		function Compra_vehiculo($gama){
			
			if($gama=="urbano"){
				
					$this->precio_base=10000;
				
			}else if($gama=="compacto"){
				
				
					$this->precio_base=20000;	
				
			}
			
			else if($gama=="berlina"){
				
					$this->precio_base=30000;	
				
			}		
			
			
		}// fin constructor
		
		//Ahora con esta funcion, solo si ejecuto la funcion antes de calcula el precio final la ayuda sera aplicada
		static function applydiscount(){
			
			self::$ayuda=4500;


		}
		
		
		
		function climatizador(){		
			
			
				$this->precio_base+=2000;					
			
			
		}// fin climatizador
		
		
		function navegador_gps(){
			
			$this->precio_base+=2500;	
			
		}//fin navegador gps
		
		
		
		function tapiceria_cuero($color){
			
			if($color=="blanco"){
			
				$this->precio_base+=3000;
			}
			
			else if($color=="beige"){
				
				$this->precio_base+=3500;
				
			}
			
			else{
				
				$this->precio_base+=5000;
				
			}
			
		}// fin tapicería
		
		
		
		function precio_final(){
			
			$valor_final = $this->precio_base-self::$ayuda;   //Ojo, el campo ayuda es estatico que pertenece a la clas
												//Entonces no puedo utilizar el this, el operador para
												//decirle que pertenece a la clase le llamo self::
												//asi es como se hace referencia al campo o variable estatica.
			return $valor_final; //Sin el this, porque es una variable del propio metodo y no de la clase.	
			
		}// fin precio final
		
		
		
	}// fin clase


?>