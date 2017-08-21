<?php

require_once __DIR__ . "/autoload.php";

use Exercise\Primos;


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
		    try {
                if ( $instance_primos->isPrimo($number) ) {
                    echo "<h3>" . $number . " es primo</h3>" . "";
                } else {
                    echo  "<h3 id='no_primo'>" . $number . " no es primo</h3>" . " ";
                }
            } catch (Exception $e) {
		        echo "<h2><strong>{$e->getMessage()}</strong></h2>";
            }
		} 

 	?>
	
</body>
</html>