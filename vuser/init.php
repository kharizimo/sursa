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

if(isset($_SESSION['vuser-id'])){
    $_user=Db::row("select * from vuser where id={$_SESSION['vuser-id']}");
    $_user['photo']=is_file("../img/avatar/{$_user['photo']}")?$_user['photo']:'0.jpg';
        if($_user['date_nais']){
        $date_nais=$_user['date_nais'];
        $_user['dn_annee']=date('Y',strtotime($date_nais));
        $_user['dn_mois']=date('m',strtotime($date_nais));
        $_user['dn_jour']=date('d',strtotime($date_nais));
        
    }
}