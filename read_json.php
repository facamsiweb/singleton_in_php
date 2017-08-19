<?php

	$data = file_get_contents("numbers.json");
	$json_series = json_decode($data, true);

	$numbers = $json_series[0]['Numeros'];
	
	foreach ($numbers as $number) 
	{
		echo $number.'-';
	}

	/**
	* Función que determina si un numero es primo
	* Tiene que recibir el numero a determinar si es primo o no
	* Devuelve True o False
	*/
	function primo($num)
	{
		$cont=0;
		// Funcion que recorre todos los numero desde el 2 hasta el valor recibido
		for($i=2;$i<=$num;$i++)
		{
			if($num%$i==0)
			{
			# Si se puede dividir por algun numero mas de una vez, no es primo
			if(++$cont>1)
				return false;
			}
		}
		return true;
	}

	$i = 899;
	
	if(primo($i))
	{
     echo "El número ".$i." es primo";		
	}	
	else
	{
		echo "El número ".$i." NO es primo";
	}
	

?>
