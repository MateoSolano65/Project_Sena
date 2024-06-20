<?php 

    require_once '../../assets/dompdf/autoload.inc.php';
    use Dompdf\Dompdf;


    ob_start();
    require 'reporte.php';
    $html = ob_get_clean();

    $domPdf = new Dompdf();

    $opciones =$domPdf->getOptions();
    $opciones->set(array('isRemoteEnabled'=>true));
    $domPdf->setOptions($opciones);

    $domPdf->loadHtml ($html);
    $domPdf->setPaper('latter');

    $domPdf->render();
    $domPdf->stream('reporte.pdf', array ("attachmen"=>false));

?>