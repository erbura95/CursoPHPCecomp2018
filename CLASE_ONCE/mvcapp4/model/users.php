<?php

require_once 'profesor.php';
require_once 'alumno.php';

class User {

	private $pdo;
	private $profesor;
	private $password;
	private $emailid;
	private $users_tipos_id;

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

	public function Devuelve_Datos_Sesion_Usuario($email,$password)
	{
		try 
			{


				$stm = $this->pdo
				          ->prepare("SELECT * FROM users 
				          			 WHERE emailid = ? and password= ?");
				          

				$stm->execute(array($email,$password));
				
				$tipo_usuario = 0;
				$id_usuario = 0;
				
				$arr  = array('nRetorno' => -1, 'cMensajeRetorno' =>'',
							  'Nombres' => '',
							  'ApellidoPaterno' => '',
							  'ApellidoMaterno' => '',
							  'sexo_id' => 0,
							  'estado_id' => 0,
							  'FechaNacimiento' => '',
							  'Celular' => '',
							  'dni' => '',
							  'user_id' => 0,
							  'email' => '',
							  'tipo_usuario' => '');
				
				$registros = $stm->fetch(PDO::FETCH_ASSOC);
				


				if ( $registros ) {
					
					$tipo_usuario = $registros['users_tipos_id'];
					$id_usuario = $registros['id'];
				
					switch ($tipo_usuario) {
						case 1: // Profesor
							
							$profesor = new Profesor();

							$data = $profesor->Obtener_x_UserID($id_usuario);
								
							$arr["Nombres"] = $data->Nombres;
							$arr["ApellidoPaterno"] = $data->ApellidoPaterno;
							$arr["ApellidoMaterno"] = $data->ApellidoMaterno;
							$arr["sexo_id"] = $data->sexo_id;
							$arr["estado_id"] = $data->estado_id;
							$arr["FechaNacimiento"] = $data->FechaNacimiento;
							$arr["Celular"] = $data->Celular;
							$arr["dni"] = $data->dni;
							$arr["user_id"] = $data->user_id;
							$arr["email"] = $email;
							$arr["tipo_usuario"] = $tipo_usuario;
							$profesor = null;
							$data = null;


							# code...
							break;
						
						case 2: // Alumnos

							$alumno = new Alumno();
							
							$data = $profesor->Obtener_x_UserID($id_usuario);

							$arr["Nombres"] = $data->Nombres;
							$arr["ApellidoPaterno"] = $data->ApellidoPaterno;
							$arr["ApellidoMaterno"] = $data->ApellidoMaterno;
							$arr["sexo_id"] = $data->sexo_id;
							$arr["estado_id"] = $data->estado_id;
							$arr["FechaNacimiento"] = $data->FechaNacimiento;
							$arr["Celular"] = $data->Celular;
							$arr["dni"] = $data->dni;
							$arr["user_id"] = $data->user_id;
							$arr["email"] = $email;
							$arr["tipo_usuario"] = $tipo_usuario;
							
							$alumno = null;
							$data = null;


						case 3:	 // 

							$arr["Nombres"] = "Marco";
							$arr["ApellidoPaterno"] = "Estrada";
							$arr["ApellidoMaterno"] = "Lopez";
							$arr["sexo_id"] = 1;
							$arr["estado_id"] = 1;
							$arr["FechaNacimiento"] = "29-09-1987";
							$arr["Celular"] = "955453193";
							$arr["dni"] = "44577092";
							$arr["user_id"] = 1;
							$arr["email"] = $email;
							$arr["tipo_usuario"] = $tipo_usuario;

						default: // Sin Accesos
							# code...
							break;
					}


					$arr["nRetorno"] = 1;


				} else {

					//echo "Datos Incorrectos";
					
					$arr["nRetorno"] = -1;
					$arr["cMensajeRetorno"] = "Datos Incorrectos";


				}
				
				// return $stm->fetch(PDO::FETCH_OBJ);

				return $arr;

			} catch (Exception $e) 
			{
				die($e->getMessage());
			}

	}

}