<?php 
require_once 'init.php';

$url=is_file("html/$_c.php")?"html/$_c.php":'html/404.php';
ob_start();
require $url;
$_content=ob_get_clean();

$url=is_file("html/$_c.js")?"html/$_c.js":'html/_blank';
ob_start();
require $url;
$_script=ob_get_clean();

$url=is_file("html/$_c.modals.php")?"html/$_c.modals.php":'html/_blank';
ob_start();
require $url;
$_modals=ob_get_clean();

if($auth??true){
    if(!isset($_SESSION['user-id'])){
        header('location:login');
        exit();
    }
}
if($check_missing_info??false){
    if($user_info_missing){
        header('location:./');
        exit();    
    }
}
$layout=$layout??'layout';
require "layers/$layout.php";