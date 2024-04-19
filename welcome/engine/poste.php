<?php
if($_a=='insert'):
    $f=['lib','province','po','flux'];
    extract(Utils::build_var_sql('insert',Utils::addslashes_array($_REQUEST),$f));
    $sql="insert into poste(id $key) values('0' $value)";
    Db::execute($sql);
    $_l="poste";
endif;
if($_a=='update'):
    $f=['lib','province','po','flux'];
    extract(Utils::build_var_sql('update',Utils::addslashes_array($_REQUEST),$f));
    $sql="update poste set id=$id $field where id=$id";
    Db::execute($sql);
    $_l="poste";//echo$sql;exit();
endif;
if($_a=='delete'):
    $sql="delete from poste where id=$id";
    Db::execute($sql);
    $_l="poste";
endif;
if($_a=='select'):
    $clause='1=1';
    $sql="select * from poste u where $clause";
    $ret=Db::rows($sql);
    echo json_encode($ret);
endif;
?>