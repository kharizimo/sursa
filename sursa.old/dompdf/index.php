<?php
require_once 'vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

// instantiate and use the dompdf class
$options=new Options();
$options->set('chroot',realpath(''));
$dompdf = new Dompdf($options);

ob_start();
require 'page.php';
$html=ob_get_clean();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('Holla',array('Attachment'=>false));