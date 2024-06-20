<?php

include($_SERVER['DOCUMENT_ROOT'].'/proyectosena2022/modelos/modeloProducto.php');

function factura(){ 

    $objProducto =new modeloProducto(NULL, NULL, NULL, NULL, NULL,NULL,NULL,NULL,NULL);
    $factura1 = $objProducto->factura();
    return $factura1;
    
}

?>