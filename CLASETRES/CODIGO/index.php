<?php declare(strict_types=1);
	
	function ejemplo_get_args_php5()
	{
		$nombres = func_get_args();
		echo "<ul>";
		foreach ($nombres as $nombre) {
			echo "<li>" . $nombre ."</li>";
		}
		echo "</ul>";
	}

	function ejemplo_get_args_php7(String...$nombres)
	{
		echo "<ul>";
		foreach ($nombres as $nombre) {
			echo "<li>" . $nombre ."</li>";
		}
		echo "</ul>";
	}

	function devuelve_suma_numeros(int ...$numeros)
	{

		return array_sum($numeros);

	}
	
	echo devuelve_suma_numeros(1,2,3,48,48);

	 //echo ejemplo_get_args_php5('Marco','Diana','Carolina','Maria');
	//echo ejemplo_get_args_php5('Marco','Diana','Carolina','Maria');
	//echo ejemplo_get_args_php7('Marco','Diana','Carolina','Maria');
	//echo ejemplo_get_args_php7('1',2,'Carolina',3);
	//echo $_SERVER['DOCUMENT_ROOT'];