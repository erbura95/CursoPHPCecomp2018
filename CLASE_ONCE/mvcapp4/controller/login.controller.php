<?php
	require_once 'model/users.php';
class LoginController
{
	private $model;

	public function Index()
	{

		require_once 'view/header.php';
		require_once 'view/login/login.php';
		require_once 'view/footer.php';
	}

	public function CerrarSesion()
	{

		session_destroy();

		header("Location:../index.php");
	}

	public function IniciarSesion(){

	    if(isset($_POST["email"])) {

	    	if (isset($_POST["password"])) {
	    		
	    		// Validar que se encuentre el usuario y la contraseña --- Tarea para ustedes

	    		$this->model = new User();

	    		$data = $this->model->Devuelve_Datos_Sesion_Usuario($_POST["email"],$_POST["password"]);

	    		if ($data["nRetorno"] == 1) {

	    			$_SESSION['user'] = $data['Nombres'] . " " . $data['ApellidoPaterno'] . " " . $data['ApellidoMaterno'];
		 			$_SESSION['Nombres'] = $data["Nombres"];
					$_SESSION['ApellidoPaterno'] = $data["ApellidoPaterno"];
					$_SESSION['ApellidoMaterno'] = $data["ApellidoMaterno"];
					$_SESSION['sexo_id'] = $data["sexo_id"];
					$_SESSION['estado_id'] = $data["estado_id"];
					$_SESSION['FechaNacimiento'] = $data["FechaNacimiento"];
					$_SESSION['Celular'] = $data["Celular"];
					$_SESSION['dni'] = $data["dni"];
					$_SESSION['user_id'] = $data["user_id"];
		    		$_SESSION['emailid'] = $data["email"]; 
		    		$_SESSION['users_tipos_id'] = $data["tipo_usuario"]; 

		    		require_once 'view/inicio/inicio.php';
		    		require_once 'view/footer.php';
	    		
	    		} else {
	    			
	    			echo $data["cMensajeRetorno"];

	    		}
				    		

	    	} else
	    	{

	    		echo "Variable de Clave NO Encontrado.";
	    	}

	    } else
	    {
	    	echo "Variable de Email NO Encontrado.";
	    }
    }

}