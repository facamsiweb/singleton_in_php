<?php

 	function autoload ($class_name) 
 	{
 		include "classes/" . $class_name . ".php";
 	}

 	spl_autoload_register('autoload');
 	$instance_primos = Primos::getInstance();

 	$data = file_get_contents("numbers.json");
	$json_numbers = json_decode($data, true);

	$numbers = $json_numbers[0]['Numeros'];
			
 	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style>
		#info {
			font-size: 1.2em;
			color: #F3F3F3;
			font-style: italic;

		}
		#no_primo {
			color: red;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<h1> Numeros primos </h1> 

	<?php		

		foreach ( $numbers as $number ) 
		{
			if ( $instance_primos->is_primo($number) ) 

				echo "<h3>" . $number . " es primo</h3>" . "";	

			else		
				echo  "<h3 id='no_primo'>" . $number . " no es primo</h3>" . " ";
			
		} 

 	?>
	
</body>
</html>