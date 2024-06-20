<?php


include($_SERVER['DOCUMENT_ROOT'].'/proyectosena2022/modelos/modeloPedido.php');


if(isset($_POST['fechaPedido']) && !empty($_POST['fechaPedido']) ) {
    //ATRAPAR DATOS DESDE LA VISTA
 
     
    $fechaPedido = $_POST ['fechaPedido'];
    $horaPedido = $_POST ['horaPedido'];
    $totalPedido = $_POST ['totalPedido']; 
    $estadoPedido = $_POST ['estadoPedido'] ; 
    $pedidoAdomicilio =$_POST ['pedidoAdomicilio'] ;
    $idUsuario =$_POST ['idUsuario'] ;


    //INSERTAR

    $objPedido = new modeloPedido(NULL, $fechaPedido, $horaPedido, $totalPedido, $estadoPedido, $pedidoAdomicilio, $idUsuario);

    $objPedido->insertarPedido();

    echo '<script type="text/javascript">
            alert("PEDIDO INSERTADO CORRECTAMENTE!");    
            window.location.href="../vistas/pedidos/insertarPedido.php"; 
        </script>';

}
    //CONSULTAR

    function ConsultarPedido(){
        $objPedido=new modeloPedido(NULL,NULL,NULL,NULL,NULL,NULL,NULL);
        $ConsultarPedido=$objPedido->ConsultarPedido();
        return $ConsultarPedido;
        }

    //FUNCION PARA CONSULTAR X ID

    function consultarPedidoxid ($idPedido){
        $objPedido = new modeloPedido($idPedido, NULL, NULL, NULL, NULL, NULL, NULL );
        $consultaXid = $objPedido->consultarPedidoxid();
         return $consultaXid;
        }

    //ACTUALIZAR 

    if(isset($_POST["idPedidoA"]) && !empty($_POST["idPedidoA"])) {

        $idPedidoVista = $_POST["idPedidoA"];
        $fechaPedidoVista = $_POST["fechaPedidoA"];
        $horaPedidoVista = $_POST["horaPedidoA"];
        $totalPedidoVista = $_POST["totalPedidoA"];
        $estadoPedidoVista = $_POST["estadoPedidoA"]; 
        $pedidoAdomicilioVista = $_POST["pedidoAdomicilioA"];
        $idUsuarioVista = $_POST["idUsuarioA"];

        $objPedido = new modeloPedido($idPedidoVista, $fechaPedidoVista, $horaPedidoVista, $totalPedidoVista, $estadoPedidoVista, $pedidoAdomicilioVista, $idUsuarioVista);

        $objPedido-> actualizarPedido();
  
        echo'<script type="text/javascript">
                   alert ("PEDIDO ACTUALIZADO CORRECTAMENTE!");
                   window.location.href="../vistas/pedidos/consultarPedido.php";
            </script>';
    }  

    // ELIMINAR
    if(isset($_GET["idPedidoEliminar"]) && !empty($_GET["idPedidoEliminar"]))
    {
        $id_Pedido= $_GET["idPedidoEliminar"];
        $objPedido=new modeloPedido($id_Pedido,NULL,NULL,NULL,NULL, NULL, NULL );
        $objPedido->eliminarPedido();
                        
        echo '<script type="text/javascript">
                    alert ("PEDIDO ELIMINADO CORRECTAMENTE!");
                    window.location.href="../vistas/pedidos/consultarPedido.php";
            </script>';
    }

?>