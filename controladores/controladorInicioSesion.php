<?php

require_once ('../modelos/modeloUsuario.php');
if(isset($_POST['correo']) && !empty($_POST['correo'] ) ) {
    $correo_UsuarioIN = $_POST['correo']; 
    $password_UsuarioIN = $_POST['password']; 

    try {
                
        $objcorreo_UsuarioIN = new modeloUsuario(NULL, $correo_UsuarioIN, NULL, NULL); 
        $Consulta = $objcorreo_UsuarioIN->consultaLogin();        
        $correo_UsuarioBD = $Consulta->correo_Usuario; 
        $password_UsuarioBD = $Consulta->password_Usuario; 
        $UsuarioBD = $Consulta->id_Rol_Usuario; 
        
        if($correo_UsuarioIN == $correo_UsuarioBD)
        {
            if($password_UsuarioIN == $password_UsuarioBD)
            {
                session_start();
                $_SESSION['usuario'] = $UsuarioBD; 
                
                if($UsuarioBD == "2"){
                    echo '<script type="text/javascript">
                            alert("INGRESO EXITOSO, BIENVENIDO CLIENTE!!");    
                            window.location.href="../vistas/menu/menuCliente.php"; 
                        </script>';
                }
                elseif ( $UsuarioBD == "1"){
                   echo '<script type="text/javascript">
                         alert("INGRESO EXITOSO, BIENVENIDO ADMIN!!");    
                         window.location.href="../vistas/menu/menuAdministrador.php"; 
                        </script>';
                        
                }
                if($UsuarioBD == "3"){
                    echo '<script type="text/javascript">
                            alert("INGRESO EXITOSO, BIENVENIDO DOMICILIARIO!!");    
                            window.location.href="../vistas/menu/menuDomiciliario.php"; 
                        </script>';
                }
            }
            else{
                echo '<script type="text/javascript">
                    alert("ERROR EN LA CONTRASEÑA");    
                    window.location.href="../vistas/login/iniciarSesion.php"; 
                </script>';
            }
        }
        else{
            echo '<script type="text/javascript">
                    alert("ERROR EN EL USUARIO");    
                    window.location.href="../vistas/login/iniciarSesion.php"; 
                </script>'; 
        }

        //code...
    } catch (\Throwable $error) {
        echo("ERROR (controlador): ".$error->getMessage());
        die();
    }
}

 else{
    header('location: ../index.html');
}

?>