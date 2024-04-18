<?php
require 'init.php';
require_once 'dompdf/vendor/autoload.php';

extract(Db::row("select id,if(date_exp>now(),1,0) exp from voyage where code='$token'"));

if(!$id){
  header('location:msg?_a=pass-error');
  exit();
}
else{
  if(!$exp){
    header('location:msg?_a=pass-expired');
    exit();
  }
}
$code=sha1($id);
$file="img/qrcode/$id.png";
$document="file-$code.pdf";

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
  <title>Document</title>
</head>
<body>
  <style>
    *{font-size:18px}
    .table{width:100%}
    .red{color:red}
    .blue{color:blue}
    .black{color:black}
    .center{text-align:center}
    .right{text-align:right}
    .left{text-align:left}
    .bold{font-weight:bold}
    .underline{text-decoration:underline}
  </style>
  <table class="table">
    <tr><td class="center"><img src="img/logo.png" alt="" height="100"></td></tr>
  </table><br><br><br>
  <p class="center bold" style="font-family:'Times New Roman';font-size:20px; color:royalblue;text-decoration:underline">REPUBLIQUE DEMOCRATIQUE DU CONGO</p>
  <p class="red center bold" style="font-size:22px">Système de surveillance sanitaire des voyageurs nationaux et internationaux Entrant, Sortant et Circulant en République Démocratique du Congo </p>
  <p class="bold center">Ces informations sont collectées dans le cadre de la réponse sanitaire à la pandémie du virus Covid-19 et autres futures maladies.</p>
  <br><br>
  <p class="center"><img src="<?=$file?>" width="200" alt=""></p>
  <br>
  <p class="bold center">Ce document est à présenter en dure ou en format électronique à l’agent frontalier. <br>This document must be presented to the border officer in paper or electronic format.</p>
  <br>
  <table class="table">
    <tr>
      <td style="width:100%;font-size:10px">
        <table class="table">
          <tr><td width="100px"></td><td class="bold center"><img src="img/certif.png" alt="" width="120"><br><span style="font-size:15px;color:royalblue">https://www.sursa.cd</span></td></tr>
          <tr><td colspan="2"><hr></td></tr>
          <tr><td width="100px"></td><td class="bold center " style="font-size:10px"><?=date('d/m/Y h:i:s')?></td></tr>
        </table>
      </td>
      <td><table>
        <tr><td style="background-color: blue; width:3px"></td><td rowspan="3"><img src="img/qrcode/0.png" width="100" alt=""></td></tr>
        <tr><td style="background-color: yellow;"></td></tr>
        <tr><td style="background-color: red;"></td></tr>
        <tr><td></td></tr>
      </table></td>
    </tr>
  </table>
</body>
</html>
<?php
$html=ob_get_clean();
$dompdf->loadHtml($html);

// Render the HTML as PDF
$dompdf->render();
$dompdf->stream($document,array('Attachment'=>false));
?>