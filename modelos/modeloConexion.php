<?php

class modeloConexion {
    //ARTRIBUTOS
    private $bdhost = 'localhost'; 
    private $bdnombre = 'proyectosena2022'; 
    private $correo_Usuario = 'root'; 
    private $bdpassword_Usuario = ''; 

    //METODOS ""
    public function conectar(){
        $objPDO = new PDO('mysql:host='.$this->bdhost.';dbname='.$this->bdnombre.';
                            charset=utf8',$this->correo_Usuario,$this->bdpassword_Usuario); 
        $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        return $objPDO; 
    }

    public function desconectar(){
        return null; 
    }
}

?>