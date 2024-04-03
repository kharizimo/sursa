<?php 
$_l=null;
if($_a=='insert'):
    // ajax
    $sql="insert into identite_vuser(id_vuser,id_identite,lib) select $id_vuser,$id_identite,lib from piece_identite where id=$id_identite";
    Db::execute($sql);echo$sql;
endif;
if($_a=='liste'):
    $sql="select * from identite_vuser where id_vuser=$id";
    $rows=Db::rows($sql);
    echo $rows?json_encode($rows):'[]';  
endif;
if($_a=='del'):
    $sql="delete from identite_vuser where id=$id";
    Db::execute($sql);
endif;