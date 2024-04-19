<?php 
require '../init.php';
$url="../engine/$_c.php";
$api=true;
if(is_file($url)){
    require $url;
}
?>