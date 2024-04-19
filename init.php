<?php
ini_set('memory_limit', '256M'); 
session_start();

extract($_REQUEST);
$_c=$_c??'index';
$_a=$_a??'';
$_s=$_s??'';
$_lang=$_lang??'fr';
$err=$err??'';
$mode=$mode??'';
$id=$id??'0';

if(in_array($_c??'',['online','offline'])){
    file_put_contents(__DIR__.'/launch',$_c);
    header('location:./');
    exit();
}
if(in_array($_c??'',['mode-on','mode-off','mode-try'])){
    if($_c=='mode-try'){
        $_SESSION['mode']=$_c;
        $_c='mode-off';
    }
    file_put_contents(__DIR__.'/mode',$_c);
    header('location:./');
    exit();
}

require_once 'orchis/orchis.php';
$launch=file_get_contents(__DIR__.'/launch');
$init=json_decode(file_get_contents(__DIR__.'/init.json'),true)[$launch];
$_app=json_decode(file_get_contents(__DIR__.'/init.json'),true)['app'];
$app_root=$init['app_root'];

Db::connect((object)$init);
$_c=$_c??'index';
$_a=$_a??'';
$_s=$_s??'';
$err=$err??'';
$id=$id??'0';

if(isset($_SESSION['user-id'])){
    $_user=Db::row("select u.*,ets.lib lib_ets,poste.lib lib_poste from user u join ets on u.id_ets=ets.id join poste on u.id_poste=poste.id where u.id={$_SESSION['user-id']}");
    $_user['photo']='0.jpg';
       
}

if(isset($_SESSION['vuser-id'])){
    $_vuser=Db::row("select u.* from vuser u where u.id={$_SESSION['vuser-id']}");
    $_vuser['photo']='0.jpg';
       
}