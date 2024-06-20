<?php


include($_SERVER['DOCUMENT_ROOT'].'/proyectosena2022/modelos/modeloUsuario2.php');


if(isset($_POST['numeroDeDocumento']) && !empty($_POST['numeroDeDocumento']) ) {
    //ATRAPAR DATOS DESDE LA VISTA
 
     
    $numeroDeDocumento = $_POST ['numeroDeDocumento'];
    $tipoDocUsuario = $_POST ['tipoDocUsuario'];
    $nombreUsuario = $_POST ['nombreUsuario']; 
    $apellidoUsuario =$_POST ['apellidoUsuario'] ; 
    $direccionUsuario =$_POST ['direccionUsuario'] ;
    $telefonoUsuario =$_POST ['telefonoUsuario'] ;
    $correoUsuario =$_POST ['correoUsuario'] ;
    $contrasenaUsuario =$_POST ['contrasenaUsuario'] ;
    $fotoUsuario =NULL;
    $estadoUsuario =$_POST ['estadoUsuario'] ;
    $idRolUsuario =$_POST ['rolUsuario'];

    
    


    //INSERTAR

    $objusuario = new modeloUsuario2(NULL, $tipoDocUsuario, $numeroDeDocumento,$nombreUsuario,$apellidoUsuario,$direccionUsuario,$telefonoUsuario,
                                    $correoUsuario,$contrasenaUsuario,$fotoUsuario, $estadoUsuario,$idRolUsuario);

    $objusuario->insertarUsuario();

    echo '<script type="text/javascript">
            alert("INSERTADO CORRECTAMENTE!");    
            window.location.href="../vistas/usuario/insertarUsuario.php"; 
        </script>';

        
    
}

    //CONSULTAR

    function listarUsuario(){
        $objusuario=new modeloUsuario2(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
        $consultarLista=$objusuario->consultarUsuario();
        return $consultarLista;
        }


        //FUNCION PARA CONSULTAR X ID

    function consultarXid ($idUsuario){
        $objusuario = new modeloUsuario2($idUsuario, NULL, NULL, NULL, NULL, NULL, NULL,NULL,NULL,NULL,NULL,NULL );
        $consultaXid = $objusuario->consultarUsuarioxid();
         return $consultaXid;
        }
        

         //ACTUALIZAR 

    if(isset($_POST["idUsuarioA"]) && !empty($_POST["idUsuarioA"])) {

        $idUsuarioVista = $_POST ['idUsuarioA'];
        $noDocUsuarioVista = $_POST ['numeroDeDocumentoA'];
        $tipoDocUsuarioVista = $_POST ['tipoDocUsuarioA'];
        $nombreVista = $_POST ['nombreUsuarioA']; 
        $apellidoVista =$_POST ['apellidoUsuarioA'] ; 
        $direccionVista =$_POST ['direccionUsuarioA'] ;
        $telefonoVista =$_POST ['telefonoUsuarioA'] ;
        $correoVista =$_POST ['correoUsuarioA'] ;
        $passwordVista =$_POST ['contrasenaUsuarioA'] ;
        $fotoUsuario =NULL;
        $estadoVista =$_POST ['estadoUsuarioA'] ;
        $idRolVista =$_POST ['rolUsuarioA'];


        $objusuario = new modeloUsuario2( $idUsuarioVista, $noDocUsuarioVista, $tipoDocUsuarioVista, $nombreVista, $apellidoVista,
                                         $direccionVista, $telefonoVista, $correoVista, $passwordVista, NULL, $estadoVista, $idRolVista);

        $objusuario-> actualizarUsuario();
  
        echo'<script type="text/javascript">
                   alert ("USUARIO ACTUALIZADO CORRECTAMENTE!");
                   window.location.href="../vistas/usuario/consultarUsuario.php";
            </script>';
    }    

// ELIMINAR
if(isset($_GET["idUsuarioEliminar"]) && !empty($_GET["idUsuarioEliminar"]))
{
    $id_Usuario= $_GET["idUsuarioEliminar"];
    $objUsuario=new modeloUsuario2($id_Usuario,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL );
    $objUsuario->eliminarUsuario();
                    
    echo '<script type="text/javascript">
                alert ("USUARIO ELIMINADO CORRECTAMENTE!");
                window.location.href="../vistas/usuario/consultarUsuario.php";
        </script>';
}
    


?>