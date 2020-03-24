<?php

class LogInController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }//Fin constructor
    
    //Metodo que verifica si un usuario esta en la base de datos
    public function logInAdmin() {

        //Using del modelo
        require 'model/LogInModel.php';

        //Se obtiene los datos enviados mediante el metodo post en el view del LogIn y se pasan a variables
        $user = $_POST["user"];
        $password = $_POST["password"];

        //Instancia del controlador
        $LogIn = new LogInModel();
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['LogIn'] = $LogIn->logIn($user, $password);

        //Se recolecta la información devuelta por el procedimiento almacenado
        foreach ($data['LogIn'] as $info) {
        }

        //Estructura de decisión para el LogIn de administradores,dependiendo del problema que tenga
        //se muestra una vista o un mensaje con el error
        if ($info[0] == 0) {

            //Se levanta una seccion para almacenar los datos del usuario logeado
            session_start();
            //Se almacena el nombre del usuario logeado y el rol en el session
            $_SESSION["admin_data"] = $info[2];
                           
            //Devuelve la vista deseada
            $this->view->show("mainAdminView.php", NULL);
            
        } else if ($info[0] == 1) {
            //Se hace una variable con el mensaje deseado 
            $message['LogInMessage'] = "Wrong password.";
            //Devuelve la vista deseada con el mensaje deseado
            $this->view->show("loginViewAdmin.php", $message);
        } else {
            //Se hace una variable con el mensaje deseado 
            $message['LogInMessage'] = "Administrator is not registered.";
            //Devuelve la vista deseada
            $this->view->show("loginViewAdmin.php", $message);
        }
    }//verificarAdmins
        
    //Función encargada de cerrar la sesión del admin
    public function signOff(){
        //Se inicia la session
        session_start();
        //Cierra la sesion de los datos de usuario    
        if (isset($_SESSION["admin_data"])){
            unset($_SESSION["admin_data"]);
        }
        //Se sale de la session y lo devuelve al indexView o pag de inicio
        //Devuelve la vista deseada
        $this->view->show("indexView.php", NULL);
    }//signOff
    
    //Método encargado de mostrar la vista del login
    public function showLogInAdminView() {
        //Devuelve la vista deseada
        $this->view->show("loginViewAdmin.php", NULL);
    }//Fin showLogInAdminView
        
}//Fin LogInController
