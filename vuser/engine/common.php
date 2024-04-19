<?php 
if($_a=='get-ville'):
    $sql="select lib from ville where province='$province'";
    $r=Db::gets($sql);
    echo $r?json_encode($r):'[]';
endif;