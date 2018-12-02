<?php

require_once 'model/funciones.php';

class UsuarioController {

	public function BajarUsuario(){
		
		//$_SESSION['']

        require_once 'view/inicio/inicio.php';
        require_once 'view/usuario/bajausuario.php';
        require_once 'view/footer.php';
     

    }

    public function EnviarBajarUsuario(){

    	$Asunto = $_REQUEST['txtTipoSolicitud'];
    	$para = $_REQUEST['txtEmail'];
    	$mensaje = $_REQUEST['txtMsg'];

    	enviar_correo_electronico($Asunto,$para,$mensaje);
    
    }
}
