<?php
    //ESTE MODELO INCLUYE EL MODELO CONEXION YA QUE SIN EL NO CONCONDARIA LOS DATOS CON LOS DE LA BASE DE DATOS 
    include ('modeloConexion.php');
    

    //NOMBRE CALSE "LA TABLA USUARIO EN LA BASE ES IGUAL QUE LA DE MODELO USUSARIO Y ESTO SE DA YA QUE EL MODELO CONEXION ESTA CONECTADO A LA BASE DATOS "
    class modeloUsuario extends modeloConexion { 
            //ATRIBUTOS
            private  $id_Usuario;
            private  $correo_Usuario='text';
            private  $password_Usuario='text';
            private  $id_Rol_Usuario;
        
        
            //ENCAPSULAR  
            function __construct($idUsuarioIN,$correoUsuarioIN,$passwordUsuarioIN,$idRolUsuarioIN)
            {
                $this->id_Usuario       =$idUsuarioIN;
                $this->correo_Usuario   =$correoUsuarioIN;
                $this->password_Usuario =$passwordUsuarioIN;
                $this->id_Rol_Usuario   =$idRolUsuarioIN;
            }

         //METODOS
     public function consultaLogin (){
         //CONECTARSE A LA BD 
         $objConexion = new modeloConexion();
         $objPDO=$objConexion::conectar();

         //GENERAR SQL
         try {
             $sql= $objPDO ->prepare ('SELECT  correo_Usuario, password_Usuario, id_Rol_Usuario from usuario
                                        WHERE correo_Usuario = :correo_Usuario');
                $sql->bindparam(':correo_Usuario', $this->correo_Usuario);
                $sql->execute();
                return $sql->fetch(PDO::FETCH_OBJ);
                $objPDO=$objConexion::desconectar();
            }catch     (\Throwable $error) {
              echo("ERROR(modelo): ".$error->getMessage());
              die();
            }   
        }

        
          //METODO CLASE "SELECIONA LA TABLA PRODUCTO"
    function listarUsuario(){

        $objConexion=new modeloConexion();
        $objPDO=$objConexion :: conectar();
    
        try{
            $sql=$objPDO->prepare("SELECT*FROM usuario;");
            $sql->execute();
        
                 
            return$sql->fetchAll(PDO :: FETCH_OBJ);
            $objPDO=$objConexion :: desconectar();
       }
        catch ( \Throwable $error){
            echo 'ERROR:'. $error->getMessage();
            die();
        }
    } 

    function factura(){

        $objConexion=new modeloConexion();
        $objPDO=$objConexion :: conectar();
    
        try{
            $sql=$objPDO->prepare("SELECT*FROM d_reporte1;");
            $sql->execute();
        
                 
            return$sql->fetchAll(PDO :: FETCH_OBJ);
            $objPDO=$objConexion :: desconectar();
       }
        catch ( \Throwable $error){
            echo 'ERROR:'. $error->getMessage();
            die();
        }
    } 
    }

?>