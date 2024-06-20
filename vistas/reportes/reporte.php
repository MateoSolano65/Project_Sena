<?php

    include('../../controladores/controladorFactura.php');

    $factura1 = factura();

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="../../assets/reporte/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/reporte/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../assets/reporte/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
 <center><h1 >Reporte</h1></center>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <center><h6 class="m-0 font-weight-bold text-primary">Reporte de pedido Domiciliario</h6></center>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>Numero de documento</th>
                         <th>Nombre</th>
                         <th>Direccion</th>
                         <th>Telefono</th>
                         <th>Corrreo</th>
                         <th>Estado</th>
                         <th>Id</th>
                         <th>Sub-Total</th>
                         <th>Cantidad Producto</th>
                    </tr>
                
                    <?php foreach($factura1 as $d_reporte1):?>
                         <tr class="two">
                               

                               <td  class="where"><?php echo$d_reporte1->no_Doc_Usuario;?></td>
                               <td  class="where"><?php echo$d_reporte1->nombre_Usuario;?></td>
                               <td  class="where"><?php echo$d_reporte1->direccion_Usuario;?></td>
                               <td  class="where"><?php echo$d_reporte1->telefono_Usuario;?></td>
                               <td class="where" ><?php echo$d_reporte1->correo_Usuario;?></td>
                               <td  class="where"><?php echo$d_reporte1->estado_Usuario;?></td>
                               <td  class="where"><?php echo$d_reporte1->id_Usuario;?></td>
                               <td  class="where"><?php echo$d_reporte1->subtotal_Producto;?></td>
                               <td  class="where"><?php echo$d_reporte1->cantidad_Producto;?></td>
                            </tr>
                         <?php endforeach;?>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>


<style>
  
</style>
<!-- /.container-fluid -->
    <!-- Bootstrap core JavaScript-->
    <script src="../../assets/reporte/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/reporte/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../assets/reporte/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../assets/reporte/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../assets/reporte/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../assets/reporte/js/demo/datatables-demo.js"></script>

</body>

</html>