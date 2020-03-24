<?php

class LogInModel {

    //Variables de clase
    protected $db;

    //Constructor
    public function __construct() {
        //Driver que permite conectar a mySQL
        require 'libs/SPDO.php';
        //Se guarda la instancia de BD en la variable db
        $this->db = SPDO::singleton();
    }//Fin constructor
    
    //Aqui para abajo van todas las funciones de la Base de Datos , ejemplo leer, listar, eliminar , actualizar , etc...
    //Función para el inicio de sesion de los admin
    public function logIn($user, $password){
        $request = $this->db->prepare('call sp_login_admin("'.$user.'","'.$password.'")');
        $request->execute();
        $result=$request->fetchAll();
        $request->CloseCursor();
        return $result;
    } //Fin logIn
            
}//Fin Clase LogInModel

