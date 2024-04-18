<?php
if($_a=='insert'):
    $sql="insert into ets(lib) values('$lib')";
    Db::execute($sql);
    header("location:../../ets");
    exit();
endif;
if($_a=='update'):
    $sql="update ets set lib='$lib' where id=$id";
    Db::execute($sql);
    header("location:../../ets");
    exit();
endif;
if($_a=='delete'):
    $sql="delete from ets where id=$id";
    Db::execute($sql);
    header("location:../../ets");
    exit();
endif;
if($_a=='select'):
    $clause='1=1';
    $sql="select * from ets u where $clause";
    $ret=Db::rows($sql);
    echo json_encode($ret);
endif;
?>