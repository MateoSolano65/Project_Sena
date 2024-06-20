
<?php

include ('modeloConexion.php');


//CLASE

    class modeloUsuario2 extends  modeloConexion{
        //ATRIBUTOS
     private   $id_Usuario;
     private   $tipo_Doc_Usuario="text";
     private   $no_Doc_Usuario="text";
     private   $nombre_Usuario="text"; 
     private   $apellido_Usuario="text";
     private   $direccion_Usuario="text";
     private   $telefono_Usuario=0;  
     private   $correo_Usuario="text"; 
     private   $password_Usuario="text";
     private   $foto_Usuario="text";
     private   $estado_Usuario="text";
     private   $id_Rol_Usuario=0;

     //ENCAPSULAR
     function __construct($id_UsuarioIN,$tipo_Doc_UsuarioIN,$no_Doc_UsuarioIN,$nombre_UsuarioIN,$apellido_UsuarioIN,$direccion_UsuarioIN,
     $telefono_UsuarioIN,$correo_UsuarioIN,$password_UsuarioIN,$foto_UsuarioIN ,$estado_UsuarioIN,$id_Rol_UsuarioIN)
     {
                $this->id_Usuario        =$id_UsuarioIN;
                $this->no_Doc_Usuario    =$no_Doc_UsuarioIN;
                $this->tipo_Doc_Usuario  =$tipo_Doc_UsuarioIN;
                $this->nombre_Usuario    =$nombre_UsuarioIN;
                $this->apellido_Usuario  =$apellido_UsuarioIN;
                $this->direccion_Usuario =$direccion_UsuarioIN;
                $this->telefono_Usuario  =$telefono_UsuarioIN;
                $this->correo_Usuario    =$correo_UsuarioIN;
                $this->password_Usuario  =$password_UsuarioIN;
                $this->foto_Usuario      =$foto_UsuarioIN;
                $this->estado_Usuario    =$estado_UsuarioIN;
                $this->id_Rol_Usuario    =$id_Rol_UsuarioIN;
                

            
    }

    public function insertarUsuario(){
        $objConexion = new modeloConexion(); 
        $objPDO = $objConexion::conectar();

        try {
            $sql = $objPDO->prepare("INSERT INTO usuario Values(
                                        :idUsuario,
                                        :tipoDocUsuario,
                                        :numeroDeDocumento,
                                        :nombreUsuario, 
                                        :apellidoUsuario, 
                                        :direccionUsuario,                                              
                                        :telefonoUsuario,
                                        :correoUsuario,
                                        :contrasenaUsuario,
                                        :fotoUsuario,
                                        :estadoUsuario,
                                        :rolUsuario  

                                    )"); 
            $sql->bindparam(':idUsuario',$this->id_Usuario);    
            $sql->bindparam(':tipoDocUsuario',$this->tipo_Doc_Usuario);     
            $sql->bindparam(':numeroDeDocumento',$this->no_Doc_Usuario); 
            $sql->bindparam(':nombreUsuario',$this->nombre_Usuario); 
            $sql->bindparam(':apellidoUsuario',$this->apellido_Usuario); 
            $sql->bindparam(':direccionUsuario',$this->direccion_Usuario); 
            $sql->bindparam(':telefonoUsuario',$this->telefono_Usuario); 
            $sql->bindparam(':correoUsuario',$this->correo_Usuario); 
            $sql->bindparam(':fotoUsuario',$this->foto_Usuario);
            $sql->bindparam(':contrasenaUsuario',$this->password_Usuario);
            $sql->bindparam(':estadoUsuario',$this->estado_Usuario);
            $sql->bindparam(':rolUsuario',$this->id_Rol_Usuario);

            $sql->execute(); 
            
            $objPDO = $objConexion::desconectar(); 

        } catch (\Throwable $error) {
            echo("Error modelo!; ".$error->getMessage());
            die();
        }

    }

     //METODO CLASE "CONSULTAR UN USUARIO INGRESANDO UN ID PARA QUE TRAIGA EL DATO CON EL ID LLAMADO EN LA VISTA"
    public function consultarUsuarioxid(){

        $objConexion = new modeloConexion(); 
        $objPDO= $objConexion::conectar();
     
        try { 
            $sql = $objPDO->prepare("SELECT * FROM usuario 
                                    WHERE id_Usuario = :idUsuario"); 
            $sql->bindparam(':idUsuario', $this->id_Usuario);

            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);

            $objPDO = $objConexion::desconectar();
            }
        catch (Throwable $error) {
        echo 'ERROR: '. $error->getMessage(); die();
        }
        
    }

    //METODO CLASE "SELECIONA LA TABLA USUARIO"
    function consultarUsuario(){

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

    public function actualizarUsuario(){
        $objConexion = new modeloConexion(); 
        $objPDO = $objConexion::conectar();

        try {
            $sql = $objPDO->prepare("UPDATE usuario SET 
                                        
                                        no_Doc_Usuario = :numeroDeDocumento,
                                        tipo_Doc_Usuario = :tipoDocUsuario,
                                        nombre_Usuario = :nombreUsuario, 
                                        apellido_Usuario = :apellidoUsuario, 
                                        direccion_Usuario = :direccionUsuario,                                              
                                        telefono_Usuario = :telefonoUsuario,
                                        correo_Usuario = :correoUsuario,
                                        password_Usuario = :contrasenaUsuario,
                                        foto_Usuario = :fotoUsuario,
                                        estado_Usuario = :estadoUsuario,
                                        id_Rol_Usuario = :rolUsuario
                                        WHERE   id_Usuario = :idUsuario

                                    "); 
            $sql->bindparam(':idUsuario',$this->id_Usuario);    
            $sql->bindparam(':tipoDocUsuario',$this->tipo_Doc_Usuario);     
            $sql->bindparam(':numeroDeDocumento',$this->no_Doc_Usuario); 
            $sql->bindparam(':nombreUsuario',$this->nombre_Usuario); 
            $sql->bindparam(':apellidoUsuario',$this->apellido_Usuario); 
            $sql->bindparam(':direccionUsuario',$this->direccion_Usuario); 
            $sql->bindparam(':telefonoUsuario',$this->telefono_Usuario); 
            $sql->bindparam(':correoUsuario',$this->correo_Usuario); 
            $sql->bindparam(':fotoUsuario',$this->foto_Usuario);
            $sql->bindparam(':contrasenaUsuario',$this->password_Usuario);
            $sql->bindparam(':estadoUsuario',$this->estado_Usuario);
            $sql->bindparam(':rolUsuario',$this->id_Rol_Usuario);

            $sql->execute(); 
            
            $objPDO = $objConexion::desconectar(); 

        } catch (\Throwable $error) {
            echo("Error modelo!; ".$error->getMessage());
            die();
        }
    }
        
   

       


         //METODO CLASE ELIMINAR CON EL DELETE "ELIMINA LOS DATOS A TRAVEZ DE LA VISTA "
    public function eliminarUsuario(){
        $objConexion = new modeloConexion();
        $objPDO = $objConexion :: conectar();
        try {
            $sql = $objPDO->prepare("DELETE FROM usuario
                                         WHERE id_Usuario = :idUsuario;");
            $sql->bindparam(':idUsuario',$this->id_Usuario);

            $sql->execute();

            $objPDO=$objConexion :: desconectar();

        } catch(\Throwable $error) {                                   
            echo'ERROR:'. $error->getMessage();
            die();
        }
    }


    }
        ?>