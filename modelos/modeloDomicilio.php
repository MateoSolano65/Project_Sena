<?php

include('modeloConexion.php'); 

class modeloProducto extends modeloConexion{
    //ATRIBUTOS IGUALES A LOS DE LA BASE DE DATOS 
    private $idProducto = 0; 
    private $descripProducto = 'texto'; 
    private $precioProducto = 0;
    private $categoriaProducto = 'texto';
    private $estadoProducto = 'texto';  

    //METODO CONSTRUCTOR - ENCAPSULAR 
    public function __construct($idProdIn, $descProdIn, $precioProdIn, $categoriaProdIn, $estadoProdIn )
    {
        $this->idProducto = $idProdIn; 
        $this->descripProducto = $descProdIn; 
        $this->precioProducto = $precioProdIn;
        $this->categoriaProducto = $categoriaProdIn; 
        $this->estadoProducto = $estadoProdIn; 
    }

    //METODOS CLASE "INSERTAR UN PRODUCTO CON LA SENTENCIA INSERT INTO"

    public function registrarProducto(){
        $objConexion = new modeloConexion(); 
        $objPDO = $objConexion::conectar();
        
        try {
            $sql = $objPDO->prepare("INSERT INTO producto VALUES
                                        (
                                            :idProducto,
                                            :descripcionProducto,
                                            :precioProducto,
                                            :categoriaProducto,
                                            :estadoProducto
                                        );"); 
            $sql->bindparam(':idProducto',$this->idProducto); 
            $sql->bindparam(':descripcionProducto',$this->descripProducto);
            $sql->bindparam(':precioProducto',$this->precioProducto);
            $sql->bindparam(':categoriaProducto',$this->categoriaProducto);
            $sql->bindparam(':estadoProducto',$this->estadoProducto);

            $sql->execute(); 

            $objPDO = $objConexion::desconectar(); 

        } catch (\Throwable $error) {
            echo("Error modelo!; ".$error->getMessage());
            die();
        }
    }
        //METODO CLASE "SELECIONA LA TABLA PRODUCTO"
    function listarProducto(){

        $objConexion=new modeloConexion();
        $objPDO=$objConexion :: conectar();
    
        try{
            $sql=$objPDO->prepare("SELECT*FROM producto;");
            $sql->execute();
        
                 
            return$sql->fetchAll(PDO :: FETCH_OBJ);
            $objPDO=$objConexion :: desconectar();
       }
        catch ( \Throwable $error){
            echo 'ERROR:'. $error->getMessage();
            die();
        }
    } 
        //METODO CLASE "CONSULTAR UN PRODUCTO INGRESANDO UN ID PARA QUE TRAIGA EL DATO CON EL ID LLAMADO EN LA VISTA"
    public function consultarProductoxid(){

        $objConexion = new modeloConexion(); 
        $objPDO= $objConexion::conectar();
     
        try { 
            $sql = $objPDO->prepare("SELECT * FROM Producto 
                                    WHERE id_Producto = :idProducto"); 
            $sql->bindparam(':idProducto', $this->idProducto);

            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);

            $objPDO = $objConexion::desconectar();
            }
        catch (Throwable $error) {
        echo 'ERROR: '. $error->getMessage(); die();
        }
        
    }
    // METODO DE LA CLASE UPDATE "SE ACTUALIZA EL LOS CAMPOS EN LA BASE DE DATOS ATRAVEZ DE LA VISTA "
    public function actualizarProducto(){

        $objConexion = new modeloConexion(); 
        $objPDO = $objConexion::conectar();
        
        try{
            $sql = $objPDO->prepare("UPDATE producto SET
                                        descrip_Producto = :descripProducto,
                                        precio_Producto = :precioProducto,
                                        categoria_Producto = :categoriaProducto,
                                        estado_Producto = :estadoProducto
                                        WHERE id_Producto = :idProducto"); 
        $sql->bindparam(':idProducto', $this->idProducto);
        $sql->bindparam(':descripProducto', $this->descripProducto); 
        $sql->bindparam(':precioProducto', $this->precioProducto);
        $sql->bindparam(':categoriaProducto', $this->categoriaProducto);
        $sql->bindparam(':estadoProducto', $this->estadoProducto);
        
        $sql->execute();
        
        $objPDO = $objConexion::desconectar();
        
        }catch (\Throwable $error) {        
            echo 'ERROR: '. $error->getMessage();
        die();
        }
    }
        //METODO CLASE ELIMINAR CON EL DELETE "ELIMINA LOS DATOS A TRAVEZ DE LA VISTA "
    public function eliminarProducto(){
        $objConexion = new modeloConexion();
        $objPDO = $objConexion :: conectar();
        try {
            $sql = $objPDO->prepare("DELETE FROM producto
                                         WHERE id_Producto = :idProducto;");
            $sql->bindparam(':idProducto',$this->idProducto);

            $sql->execute();

            $objPDO=$objConexion :: desconectar();

        } catch(\Throwable $error) {                                   
            echo'ERROR:'. $error->getMessage();
            die();
        }
    }
    //METODO CLASE "SELECIONA LA TABLA PRODUCTO"
    function factura(){

        $objConexion=new modeloConexion();
        $objPDO=$objConexion :: conectar();
    
        try{
            $sql=$objPDO->prepare("SELECT*FROM d_reporte1 ");
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