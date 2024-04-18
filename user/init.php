<?php 
session_start();
require_once __DIR__.'/../orchis/orchis.php';
$launch=file_get_contents(__DIR__.'/launch');
$param=json_decode(file_get_contents(__DIR__.'/param.json'),true)[$launch];
$_app=json_decode(file_get_contents(__DIR__.'/param.json'),true)['app'];
$app_root=$param['app_root'];

Db::connect((object)$param);

extract($_REQUEST);

$_c=$_c??'index';
$_a=$_a??'';
$_s=$_s??'';
$err=$err??'';
$id=$id??'0';

if(isset($_SESSION['user-id'])){
    $_user=Db::row("select u.*,ets.lib lib_ets,poste.lib lib_poste from user u join ets on u.id_ets=ets.id join poste on u.id_poste=poste.id where u.id={$_SESSION['user-id']}");
    $_user['photo']='0.jpg';
       
}