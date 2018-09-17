<?php

class Papa {

	//declarando constante
	const genero = 'Masculino';
	//propiedades 
	public $nombre = "Marco";
	public $apellido = "Estrada Lopez";
	
	private $edad;

	public function set_Edad($value)
	{
		$this->edad = $value;
	}

	public function get_Edad()
	{
		return $this->edad;
	}
}


class Hijo extends Papa{

	function __construct($p_nombre)
	{
		$this->nombre = $p_nombre;
	}
}


class Familia
{
	public function miembro(Hijo $hija)
	{
		echo "Mi Nombre es : " .$hija->nombre . " y Mi Apellido es: " .$hija->apellido . 
	 " Edad : " .$hija->get_Edad();
	}
}

$hija = new Hijo('Diana Violeta');
$hija->set_Edad(22);

$familia = new Familia();

$familia->miembro($hija);

$papa = new Papa();

print("<br>");
echo "Mi Genero es : " .$papa::genero;

interface AutomovilInterface{
	public function getTipo();
	public function getColor();
	public function getMarca();
}

class Mercedes implements AutomovilInterface{

	public function getTipo()
	{
		echo "Sedan";
	}
	public function getColor()
	{
		echo "Rojo";
	}
	public function getMarca()
	 {
	 	echo "Benz 2015";
	 }
}
	print("<br>");

	$carro = new Mercedes();

	$carro->getColor();

/*

echo "Mi Nombre es : " .$hija->nombre . " y Mi Apellido es: " .$hija->apellido . 
	 " Edad : " .$hija->get_Edad();
*/

