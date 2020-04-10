<?php

Class DefaultController {
    
    private $view;

    public function __construct() {     
        $this->view = new View();
    }//Constructor
    
    public function acciondefault(){
        require 'model/OfertasModel.php'; 
        //llamar modelo para traer datos 

        $ofertasModel = new OfertasModel();

        $datos['listaOfertas'] = $ofertasModel->obtenerOfertas();

        $this->view->show("indexView.php", $datos);
        
    }//acciondefault
    
}//Fin Clase
