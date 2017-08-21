<?php
namespace Exercise;


class Primos
{
	private static $instance;

	private function __construct()
	{
		echo "<p id='info'>Se creado la instancia de la clase " . __CLASS__ . "</p>\n";

	}

  public static function getInstance()
  {
	 if (  !self::$instance instanceof self )
	 {
		self::$instance = new self;
	 }
	 return self::$instance;

  }

	/**
	 * Función que determina si un numero es primo
	 * Tiene que recibir el numero a determinar si es primo o no
	 * Devuelve True o False
	*/
	public static function isPrimo($num)
	{
		self::checkValBeforeProceed($num);

		$cont = 0;

		// Funcion que recorre todos los numero desde el 2 hasta el valor recibido
		for ($i = 2; $i <= $num; $i++) {
			if ($num % $i == 0 ) {
				# Si se puede dividir por algun numero mas de una vez, no es primo
				if (++$cont > 1) {
                    return false;
				}
			}
		}
		return true;
	}

    /**
     * @param $value to check if is numeric
     */
	public static function checkValBeforeProceed($value)
	{
		if (!is_numeric($value)) {
			throw new \InvalidArgumentException(sprintf(
				"El archivo de configuración tiene valores no numéricos: %s",
				$value
			));
		}
	}

}
