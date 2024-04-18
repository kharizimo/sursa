<?php 
$api=false;
require '../init.php';
if(is_file("$_c.php")){
    require "$_c.php";
}
if(!$api)
    header("location:../../$_l");