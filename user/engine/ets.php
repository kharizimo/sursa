<?php 
if($_a=='table'):
    $sql="select * from ets";
    $r=Db::rows($sql);
    $ret['data']=array_map(function($e){
        $btn='<button data-id="'.$e['id'].'" class="btn btn-danger btn-sm">supprimer</button>';
        return [$e['lib'],$btn];
    },$r);
    echo $r?json_encode($ret):'{"data":[]}';
endif;