<?php 

class Libro 
{
	private $pdo;
	
	public $nombre_libro;
	public $editorial_id; 
	public $estado_id;
	public $genero_id;
	public $numero_paginas;
	public $anio_edicion;
	public $FechaPublicacion;
	public $codigo_isbn;
	public $resumen;
	public $bimagenReferencia;
	public $RutaImagenReferencia;
	public $id;

	public function __construct()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}

	}

	public function Listar()
	{
		try
		{
	
			$stm = $this->pdo->prepare("SELECT * FROM libros");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			        	->prepare("SELECT * FROM libros WHERE id = ?");

			$stm->execute(array($id));
			
			return $stm->fetch(PDO::FETCH_OBJ);

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$sql = "UPDATE libros SET  estado_id = ? WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(array(2,$id));

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar_RutaImagenReferencia( $ruta_imagen , $codigo_libro )
	{	
		try 
			{
				$sql = "UPDATE libros SET RutaImagenReferencia = ?
					    WHERE id = ?";


				$this->pdo->prepare($sql)
				     ->execute(
					    array($ruta_imagen , $codigo_libro)
					);
			} catch (Exception $e) 
			{
				die($e->getMessage());
			}
	
	}
	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE libros SET 
						nombre_libro          = ?, 
						editorial_id        = ?,
                        estado_id        = ?,
                        genero_id        = ?,
						numero_paginas = ?,
						anio_edicion = ?,
						FechaPublicacion = ?,
						codigo_isbn = ?,
						resumen = ?,
						bimagenReferencia = ?,
						RutaImagenReferencia = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre_libro, 
                        $data->editorial_id,
                        $data->estado_id,
                        $data->genero_id,
                        $data->numero_paginas,
                        $data->anio_edicion,
                        $data->FechaPublicacion,
                        $data->codigo_isbn,
                        $data->resumen,
                        $data->bimagenReferencia,
						$data->RutaImagenReferencia,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Libro $data)
	{
		try 
		{
			//var_dump($data);

			$codigo_insertado = 0;

			$sql = "INSERT INTO libros (nombre_libro, editorial_id,estado_id,genero_id,numero_paginas,anio_edicion,FechaPublicacion,codigo_isbn,resumen,bimagenReferencia,RutaImagenReferencia ) 
		        VALUES (?, ? , ? , ? , ? , ? , ? , ? , ? , ? , ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
	                    	$data->nombre_libro, 
	                        $data->editorial_id,
	                        $data->estado_id,
	                        $data->genero_id,
	                        $data->numero_paginas,
	                        $data->anio_edicion,
	                        $data->FechaPublicacion,
	                        $data->codigo_isbn,
	                        $data->resumen,
	                        $data->bimagenReferencia,
							$data->RutaImagenReferencia
	                )
				);

			$codigo_insertado = $this->pdo->lastInsertId();

			return $codigo_insertado;

		} catch (Exception $e) 
		{
			die($e->getMessage());
			return 0;
		}
	}
}
