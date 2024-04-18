<?php
require 'init.php';

if($mode=='off'){
    require('maintenance.php');
    exit();
}

$layout='layout';
$default_page=$_SESSION['default_page']??'';
$card_header_param=['logo'=>true,'country-name'=>true];
$title=$title??'';

if(preg_match("/(user|v-user)/",$_c)){
    $flash_info=false;
    $_c=$_c?$_c:'user.home';
}

ob_start();
require 'layers/card-profil.php';
$_card_profil=ob_get_clean();
ob_start();
require 'layers/card-voyage.php';
$_card_voyage=ob_get_clean();
ob_start();
require 'layers/card-sante.php';
$_card_sante=ob_get_clean();
ob_start();
require 'layers/card-header.php';
$_card_header=ob_get_clean();
ob_start();
require 'layers/card-footer.php';
$_card_footer=ob_get_clean();
ob_start();
require 'layers/card-title.php';
$_card_title=ob_get_clean();
ob_start();
require 'layers/card-warning.php';
$_card_warning=ob_get_clean();
ob_start();
require 'layers/header.php';
$_header=ob_get_clean();
ob_start();
require 'layers/footer.php';
$_footer=ob_get_clean();

$url=is_file("html/$_c.php")?"html/$_c.php":"html/404.php";
ob_start();
require $url;
$_content=ob_get_clean();

$url=is_file("html/$_c.js")?"html/$_c.js":"_blank";
ob_start();
require $url;
$_script=ob_get_clean();

if($_login){
    if(!isset($_SESSION['user'])){
        header('location:login');
    }
}

require "layers/$layout.php";