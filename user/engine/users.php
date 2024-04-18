<?php 
if($_a=='table'):
    $sql="select user.*,poste.lib lib_poste,ets.lib lib_ets from user join poste on poste.id=user.id_poste join ets on ets.id=user.id_ets";
    $r=Db::rows($sql);
    $ret['data']=array_map(function($e){
        $btn='<button data-id="'.$e['id'].'" class="btn btn-danger btn-sm">supprimer</button>';
        return [$e['nom'],$e['email'],$e['telephone'],$e['lib_poste'],$e['lib_ets'],$btn];
    },$r);
    echo $r?json_encode($ret):'{"data":[]}';
endif;