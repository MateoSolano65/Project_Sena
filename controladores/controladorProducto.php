<?php


include($_SERVER['DOCUMENT_ROOT'].'/proyectosena2022/modelos/modeloProducto.php');


if(isset($_POST['descripProducto']) && !empty($_POST['descripProducto']) ) {
    //ATRAPAR DATOS DESDE LA VISTA
 
    $descripProducto = $_POST ['descripProducto']; 
    $precioProducto = $_POST ['precioProducto'];
    $categoriaProducto = $_POST ['categoriaProducto']; 
    $estadoProducto =$_POST ['estadoProducto'] ; 

    //INSERTAR

    $objProducto =new modeloProducto(NULL, $descripProducto, $precioProducto, $categoriaProducto, $estadoProducto);

    $objProducto->registrarProducto();

    echo '<script type="text/javascript">
            alert("PRODUCTO INSERTADO CORRECETAMENTE!");
            window.location.href="../vistas/producto/insertarProducto.php";
            </script>';
}

    //CONSULTAR

    function consultarLista(){
        $objProducto=new modeloProducto(NULL,NULL,NULL,NULL,NULL);
        $consultaLista=$objProducto->listarProducto();
        return $consultaLista;
        }

    //FUNCION PARA CONSULTAR X ID

    function consultarXid ($idProducto){
    $objProducto = new modeloProducto($idProducto, NULL, NULL, NULL, NULL, NULL, NULL );
    $consultaXid = $objProducto->consultarProductoxid();
     return $consultaXid;
    }

    //ACTUALIZAR 

    if(isset($_POST["idProductoA"]) && !empty($_POST["idProductoA"])) {

        $idProductoVista = $_POST["idProductoA"];
        $descripProductoVista = $_POST["descripProductoA"];
        $precioProductoVista = $_POST["precioProductoA"];
        $categoriaProductoVista = $_POST["categoriaProductoA"];
        $estadoProductoVista = $_POST["estadoProductoA"];

        $objProducto = new modeloProducto ($idProductoVista, $descripProductoVista, $precioProductoVista, $categoriaProductoVista, $estadoProductoVista);

        $objProducto-> actualizarProducto();
  
        echo'<script type="text/javascript">
                   alert ("PRODUCTO ACTUALIZADO CORRECTAMENTE!");
                   window.location.href="../vistas/producto/consultarProducto.php";
            </script>';
    }    
    
    // ELIMINAR
    if(isset($_GET["idProductoEliminar"]) && !empty($_GET["idProductoEliminar"]))
    {
        $id_Producto= $_GET["idProductoEliminar"];
        $objProducto=new modeloProducto($id_Producto,NULL,NULL,NULL,NULL );
        $objProducto->eliminarProducto();
                        
        echo '<script type="text/javascript">
                    alert ("PRODUCTO ELIMINADO CORRECTAMENTE!");
                    window.location.href="../vistas/producto/consultarProducto.php";
            </script>';
    }
?>