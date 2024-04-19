<?php 
require_once '../../init.php';

$_l=null;
$url="$_c.php";
if(is_file($url)){
    require $url;
}
if(!is_null($_l)){
    header("location:../../../$_l");
    exit();
}