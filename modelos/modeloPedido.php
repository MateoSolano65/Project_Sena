<?php

include('modeloConexion.php'); 

class modeloPedido extends modeloConexion{
    //ATRIBUTOS IGUALES A LOS DE LA BASE DE DATOS 
    private $idPedido = 0; 
    private $fechaPedido = 'date'; 
    private $horaPedido = 'time';
    private $totalPedido = 'texto';
    private $estadoPedido = 'texto';
    private $pedidoAdomicilio = 'texto'; 
    private $idUsuario = 0;  

    //METODO CONSTRUCTOR - ENCAPSULAR 
    public function __construct($idPedidoIn, $fechaPedidoIn, $horaPedidoIn, $totalPedidodIn, $estadoPedidodIn, $pedidoAdomicilioIn, $idUsuarioIn )
    {
        $this->idPedido = $idPedidoIn; 
        $this->fechaPedido = $fechaPedidoIn; 
        $this->horaPedido = $horaPedidoIn; 
        $this->totalPedido = $totalPedidodIn;
        $this->estadoPedido = $estadoPedidodIn;
        $this->pedidoAdomicilio = $pedidoAdomicilioIn; 
        $this->idUsuario = $idUsuarioIn; 

    }

    //METODOS CLASE "INSERTAR UN PEDIDO CON PROCEDIMIENTOS ALMACENADOS"

    public function insertarPedido(){
        $objConexion = new modeloConexion(); 
        $objPDO = $objConexion::conectar();
        
        try {
            $sql = $objPDO->prepare("CALL insertarPedido 
                                        (   :fechaPedido,
                                            :horaPedido,
                                            :totalPedido,
                                            :estadoPedido,
                                            :pedidoAdomicilio,
                                            :idUsuario
                                        );"); 
            $sql->bindparam(':fechaPedido',$this->fechaPedido); 
            $sql->bindparam(':horaPedido',$this->horaPedido);
            $sql->bindparam(':totalPedido',$this->totalPedido);
            $sql->bindparam(':estadoPedido',$this->estadoPedido);
            $sql->bindparam(':pedidoAdomicilio',$this->pedidoAdomicilio);
            $sql->bindparam(':idUsuario',$this->idUsuario);

            $sql->execute(); 

            $objPDO = $objConexion::desconectar(); 

        } catch (\Throwable $error) {
            echo("Error modelo Pedido!; ".$error->getMessage());
            die();
        }
    }
        //METODO CLASE "SELECIONA LA TABLA PEDIDO"
    function ConsultarPedido(){

        $objConexion=new modeloConexion();
        $objPDO=$objConexion :: conectar();
    
        try{
            $sql=$objPDO->prepare("CALL ConsultarPedido();"); 
          
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);

            $objPDO=$objConexion :: desconectar();
       }
        catch ( \Throwable $error){
            echo 'ERROR:'. $error->getMessage();
            die();
        }
    } 
    //METODO CLASE "CONSULTAR UN PEDIDO; TRAE EL DATO CON EL ID LLAMADO EN LA VISTA"
    public function consultarPedidoxid(){

        $objConexion = new modeloConexion(); 
        $objPDO= $objConexion::conectar();
     
        try { 
            $sql = $objPDO->prepare("CALL consultarPedidoxid 
                                        (:idPedido);"); 
            $sql->bindparam(':idPedido', $this->idPedido);

            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);

            $objPDO = $objConexion::desconectar();
            }
        catch (Throwable $error) {
        echo 'ERROR: '. $error->getMessage(); die();
        }
        
    }

    //METODO CLASE "ACTUALIZAR PEDIDO"
    public function actualizarPedido(){
        $objConexion = new modeloConexion(); 
        $objPDO = $objConexion::conectar();
        
        try {
            $sql = $objPDO->prepare("CALL actualizarPedido 
                                        (   :idPedido, 
                                            :fechaPedido,
                                            :horaPedido,
                                            :totalPedido,
                                            :estadoPedido,
                                            :pedidoAdomicilio,
                                            :idUsuario
                                        );"); 
            $sql->bindparam(':idPedido',$this->idPedido); 
            $sql->bindparam(':fechaPedido',$this->fechaPedido); 
            $sql->bindparam(':horaPedido',$this->horaPedido);
            $sql->bindparam(':totalPedido',$this->totalPedido);
            $sql->bindparam(':estadoPedido',$this->estadoPedido);
            $sql->bindparam(':pedidoAdomicilio',$this->pedidoAdomicilio);
            $sql->bindparam(':idUsuario',$this->idUsuario);

            $sql->execute(); 

            $objPDO = $objConexion::desconectar(); 

        } catch (\Throwable $error) {
            echo("Error modelo Pedido!; ".$error->getMessage());
            die();
        }
    }

    //METODO CLASE ELIMINAR CON EL DELETE "ELIMINA LOS DATOS A TRAVEZ DE LA VISTA "
    public function eliminarPedido(){
        $objConexion = new modeloConexion();
        $objPDO = $objConexion :: conectar();
        try {
            $sql = $objPDO->prepare("CALL eliminarPedido(
                                          :idPedido);");
            $sql->bindparam(':idPedido',$this->idPedido);

            $sql->execute();

            $objPDO=$objConexion :: desconectar();

        } catch(\Throwable $error) {                                   
            echo'ERROR:'. $error->getMessage();
            die();
        }
    }
     
}
  
?>