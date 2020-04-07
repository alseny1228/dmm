<?php
// use models\Imprimer;
// use Spipu\Html2Pdf\Html2Pdf;
    require_once(dirname(__FILE__).'/html2pdf/html2pdf/html2pdf.class.php');
    // require_once('../models/html2pdf/html2pdf/html2pdf.class.php');
    $pdf=new HTML2PDF();
    $pdf->writeHTML("bonjour le monde"); 
    $pdf->Output('imprimer.controller.php');
