<?php
ini_set('memory_limit', '256M'); 
session_start();

if(in_array($_REQUEST['_c']??'',['online','offline'])){
    file_put_contents('launcher',$_REQUEST['_c']);
    header('location:./');
    exit();
}
if(in_array($_REQUEST['_c']??'',['mode-on','mode-off'])){
    if($_REQUEST['_c']=='mode-on'){
        $_SESSION['mode']='on';
    }
    else{
        unset($_SESSION['mode']);
    }
    header('location:./');
    exit();
}

require 'orchis/db.php';
require 'orchis/utils.php';
require 'utils/Lang.php';
require 'utils/Common.php';
require 'utils/SecurePage.php';
require 'vars.php';

Lang::$lang=$_SESSION['lang']??'fr';
Lang::$dictionnary=json_decode(file_get_contents(__DIR__.'/lang.json'),true);

$mode=$_SESSION['mode']??file_get_contents(__DIR__.'/mode');
$launch=file_get_contents(__DIR__.'/launcher');
$param=json_decode(file_get_contents(__DIR__.'/param.json'),true);
Db::connect($param[$launch]);
extract($_REQUEST);
$_mvt=$_SESSION['_mvt']??'';
$app_root=$param[$launch]['app_root'];

$_bg=$param['bg']??[];
$_news=$param['news']??[];
$_bg_cible=rand(0,count($_bg)-1);

$_c=$_c??'index';
$_a=$_a??'';
$_l=$_l??'';
$_s=$_s??'';
$id=$id??'0';

$_login=false;

$token=$token??'';
$mvt=$mvt??'';
$mode=$mode??'';
$mvt_url=$mvt?"?mvt=$mvt":'';
$mvt_urls=$mvt?"&mvt=$mvt":'';
$mvt_l=$mvt?"$mvt":'';

$_root=$param[$launch]['_root'];

$provinces=Db::gets('select distinct province data from villes order by province');
