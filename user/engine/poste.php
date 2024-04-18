<?php 
if($_a=='tables'):
    $sql="select * from poste";
    $r=Db::rows($sql);
    $ret['data']=array_map(function($e){
        $edit='<button data-id="'.$e['id'].'" class="btn btn-success btn-sm btn-edit">Modifier</button>';
        $del='<button data-id="'.$e['id'].'" class="btn btn-danger btn-sm btn-del">supprimer</button>';
        return [$e['lib'],$e['province'],$e['po'],$e['flux'],$edit,$del];
    },$r);
    echo $r?json_encode($ret):'{"data":[]}';
endif;
if($_a=='table'):
    $sql="select * from poste";
    $r=Db::rows($sql);
    echo $r?json_encode($r):'[]';
endif;
if($_a=='get'):
    $sql="select * from poste where id=$id";
    $r=Db::row($sql);
    echo $r?json_encode($r):'{}';
endif;
if($_a=='insert'):
    $sql="insert into poste(lib,province,po,flux) values('$lib','$province','$po','$flux')";
    Db::execute($sql);
endif;
if($_a=='update'):
    $sql="update poste set lib='$lib';province='$province',po='$po',flux='$flux' where id=$id";
    Db::execute($sql);
endif;
if($_a=='delete'):
    $sql="delete from poste where id=$id";
    Db::execute($sql);
endif;