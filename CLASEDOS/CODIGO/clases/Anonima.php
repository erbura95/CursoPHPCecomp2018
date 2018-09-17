<?php

class Fabrica{
	public function FabricarMesa($p_color,$p_numero)
	{
		return new Class($p_color,$p_numero){

			private $color;
			private $patas;

			public function __construct($p_color,$p_numero)
			{
				$this->color = $p_color;
				$this->patas = $p_numero;
			}

			public function getColor()
			{
				return $this->color;
			}

			public function getPatas()
			{
				return $this->patas;
			}
		};
	}
}

$fabrica = new Fabrica();

$mesa = $fabrica->FabricarMesa('Marron',4);

$mesa2 = $fabrica->FabricarMesa('Acero',6);


print("<br>");

echo "La Mesa 1 es de color : " .$mesa->getColor() . " y # de patas : " .$mesa->getPatas();
print("<br>");
echo "La Mesa 2 es de color : " .$mesa2->getColor() . " y # de patas : " .$mesa2->getPatas();


