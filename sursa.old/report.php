<?php
require 'init.php';
require_once 'dompdf/vendor/autoload.php';
ob_start();
require "reports/$page.php";
$content=ob_get_clean();

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;
// instantiate and use the dompdf class
$options=new Options();
$options->set('chroot',realpath(''));
$dompdf = new Dompdf($options);
ob_start();
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report</title>
</head>
<body>
<style>
    @page {
        size: A4 <?=$pos??'landscape'?>;
    }

    *{font-size:15px}
    .red{color:red}
    .blue{color:blue}
    .black{color:black}
    .center{text-align:center}
    .right{text-align:right}
    .left{text-align:left}
    .bold{font-weight:bold}
    .underline{text-decoration:underline}
    .box{
      padding:10px 20px;
      background-color: darkgray;
      border-radius: 10px;
      font-weight: bold;
    }
    .box-border{border:2px solid black}
    .invisible{visibility:hidden}
    .container{
      margin: 0 20px;
      font-family:Arial, Helvetica, sans-serif;
    }
    .table{width: 100%;}
    .mask td{padding:6px}
    .mask tr td:first-child{font-weight: bold;}

    .report-table{
      border-collapse: collapse;      
    }
    .report-table td{margin:5px;border:2px solid black}
    .report-table .thead{
      background-color: grey;
      font-weight:bold
    }
    .sidebar .photo img{
      border: 1px solid black;
      border-radius: 10px;
    }
    table.table-cells-center td{text-align:center}
  </style>
  <p class="center"><img src="img/logo.png" alt="" height="100"></p>
  <p class="center bold" style="font-family:'Times New Roman';font-size:20px; color:royalblue;text-decoration:underline">REPUBLIQUE DEMOCRATIQUE DU CONGO</p>
  <p class="center bold" style="font-size:20px; margin:0 20px">Système de surveillance sanitaire des voyageurs Entrant, Sortant et Circulant en République Démocratique du Congo (SURSA) </p>
  <br><br>
  <div class="container">
    <?=$content ?>
  </div>
  <br>
  <br>
  
</body>
</html>
<?php
$html=ob_get_clean();
$dompdf->loadHtml($html);
$title=$title??('Reporting-'.time());
// Render the HTML as PDF
$dompdf->render();
$dompdf->stream($title,array('Attachment'=>false));
?>