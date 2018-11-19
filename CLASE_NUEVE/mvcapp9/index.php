<?php
require_once 'model/database.php';

//echo $HTTP_SERVER_VARS["REQUEST_METHOD"];
session_start();

if (isset($_REQUEST['c']) == 'Login' && isset($_REQUEST['a']) == 'IniciarSesion') {
    

    // Obtenemos el controlador que queremos cargar
        $controller = strtolower($_REQUEST['c']);
        $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
        
            // Instanciamos el controlador
            require_once "controller/$controller.controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;
            
            // Llama la accion
            call_user_func( array( $controller, $accion ) );
        
}  else

{

    if(!isset($_SESSION["user"]) || empty($_SESSION["user"])){

        $controller = 'login';

        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        $controller->Index(); 

    } else
    {
        
        $controller = 'inicio';

        // Todo esta lógica hara el papel de un FrontController
        if(!isset($_REQUEST['c']))
        {

            require_once "controller/$controller.controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;
            $controller->Index();    
   
        }
        else
        {            
                    // Obtenemos el controlador que queremos cargar
                    $controller = strtolower($_REQUEST['c']);
                    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
                    

                    // Instanciamos el controlador
                    require_once "controller/$controller.controller.php";
                    $controller = ucwords($controller) . 'Controller';
                    $controller = new $controller;
                    

                    // Llama la accion
                    call_user_func( array( $controller, $accion ) );

        }

    }

}
