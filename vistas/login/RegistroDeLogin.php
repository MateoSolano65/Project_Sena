<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="../../assets/css/Registrar.css" rel="stylesheet">

    <title>Registrar</title>
  </head>
  <body>
   <section class="contact-box">
       <div class="row no-gutters bg-dark">
           <div class="col-xl-5 col-lg-12 register-bg">
        
           </div>
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Crea tu cuenta gratis</h1>
                    <!--
                        <div class="form-group">
                        <button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100"><i class="icon ion-logo-google lead align-middle mr-2"></i> Google </button>
                        <button class="btn btn-outline-dark d-inline-block text-light mb-3 width-100"><i class="icon ion-logo-facebook lead align-middle mr-2"></i> Facebook</button>
                    </div>
                                            -->
                    <p class="text-muted mb-5">Ingresa la siguiente información para crear una cuenta.</p>

                    <form action="../../controladores/controladorUsuario.php" method="POST"  class="user">
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Digite Su Nombre <span class="text-danger">*</span></label>
                                <input id="nombre" name="nombreUsuario" type="text" class="form-control" placeholder="Tu nombre">
                            </div>
                            
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Digite Su Apellido <span class="text-danger">*</span></label>
                            <input name="apellidoUsuario" id="apellido" type="text" class="form-control" placeholder="Apellido">
                        </div>
                        <span >  Tipo de documento </span>
                                    
                                    <select  class="desplegable" name="tipoDocUsuario" id="tipoDoc" name="tipoUsuario">
                                        <option value="C.C">C.C</option>
                                        <option value="T.I">T.I</option>
                                        <option value="C.E">C.E</option>
                          
                                    </select>
                                    <br>
                                    <div class="form-group col-md-6">
                                <label class="font-weight-bold">Digite Su Numero de Documento<span class="text-danger">*</span></label>
                                <input id="documento" name="numeroDeDocumento" type="number" class="form-control" placeholder="namber from document">
                            </div>

                        <div class="form-group col-md-6">
                                <label class="font-weight-bold">Digite Su Dirección <span class="text-danger">*</span></label>
                                <input id="direccion" name="direccionUsuario" type="text" class="form-control" placeholder="Direccion">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Nº Celular <span class="text-danger">*</span></label>
                                <input id="celular" name="telefonoUsuario" type="number" class="form-control" placeholder="Numero Celular">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Digite Su Correo <span class="text-danger">*</span></label>
                                <input id="correo" name="correoUsuario" type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Digite Su Contraseña <span class="text-danger">*</span></label>
                                <input id="password" name="contrasenaUsuario" type="password" class="form-control" placeholder="Password">

                            </div>
                            <br>
                                    <span class="boton" id="estadoUsuario" >Estado Usuario</span>
                                    <select class="boton" name="estadoUsuario" id="">
                                        <option value="activo">Activo</option>
                                        
                                    </select>
                                    <br>
                                    <span class="boton"  >Rol De Uusuario</span>
                                    <select class="boton" name="rolUsuario" id="">
                                        
                                        <option value="2">cliente</option>
                                        
                                    </select>

                                    <br>
                   
                            
                        
                        <a href="../../controladores/controladorUsuario.php"><button class="btn btn-primary width-100">Crear</button></a>
                        
                    </form>
                   
                    
                    <br>
                    
                   
                    
                </div>
                <a href="IniciarSesion.php"> <button class="btn btn-primary width-100">Atras..</button></a>
                <br>
                
           </div>
       </div>
   </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>