<?php

class OfertasModel {

    //Variables de clase
    protected $db;

    //Constructor
    public function __construct() {
        //Driver que permite conectar a mySQL
        require 'libs/SPDO.php';
        //Se guarda la instancia de BD en la variable db
        $this->db = SPDO::singleton();
    }//Fin constructor
    
    
    public function obtenerOfertas(){
        $request = $this->db->prepare('call sp_obtener_ofertas');
        $request->execute();
        $result=$request->fetchAll();

        $request->CloseCursor();
        return $result;
    } //Fin obtenerOfertas

     
}//Fin Clase OfertasModel

