<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("05a-varYmettEstaticosConcesionario.php");
	Compra_vehiculo::applydiscount();  //Entonces bajara el precio para todos.	//PAra aplicar la ayuda del gobierno, que lo aplicara por fechas, y va a ser aplicado
	//a todas las instancias automaticamente, hare asi


	//Entra el primer cliente
		
	$compraAntonio = new Compra_vehiculo("compacto");  //Recordemos que este consructor me pide un parametro para fijar precio inicial

	echo "Este es el precio sin accesorios: ".$compraAntonio->precio_final()."<br><br>";

	$compraAntonio->climatizador();


	echo "Este es el precio con climatizador: ".$compraAntonio->precio_final()."<br><br>";


	$compraAntonio->tapiceria_cuero("blanco");

	echo "Este es el precio con climatizador y tapiceria blanca: ".$compraAntonio->precio_final()."<br><br>";

	

	//Ahora entra Ana al concesionrio
	$compraAna = new Compra_vehiculo("compacto");






	$compraAna->climatizador();

	$compraAna->tapiceria_cuero("rojo");

	echo "Este es el precio final de un compacto para Ana con climatizador y tapiceria roja: ".$compraAna->precio_final()."<br><br>";
	
	
	


?>
</body>
</html>