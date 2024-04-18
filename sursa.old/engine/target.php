<?php 
if($_a=='check'){
    $row=(object)[];
    if(isset($id)){
        $row=Db::row("select * from target where ref_id=$id");
        echo json_encode((object)$row);
    }
    else{
        $row=Db::row("select * from target where ref_id=$id");
        echo json_encode((object)$row);
    }
}
if($_a=='creat'):
    $id_creat=$_SESSION['user'];
    $sql="insert into target(noms,sexe,telephone,autre_piece,num_passeport,fields,id_creat,date_creat,demandeur,procedures,raison) values";
    $sql.="('$noms','$sexe','$telephone','$autre_piece','$num_passeport','{}','$id_creat',now(),'$demandeur','$procedures','$raison')";
    Db::execute($sql);
    $_l="user.target";
endif;
if($_a=='set'):
    $id_creat=$_SESSION['user'];
    $id=$v_user;
    $fields='{"nationalite":"","date_nais":"","poids":"","taille":"","groupe_sanguin":"","email":""}';
    $sql="insert into target(v_user,noms,sexe,telephone,autre_piece,num_passeport,fields,id_creat,date_creat,demandeur,procedures,raison) ";
    $sql.=" select $id,concat(nom,' ',postnom,' ',prenom),sexe,telephone,autre_piece,num_passeport,'$fields','$id_creat',now(),'$demandeur','$procedures','$raison' from v_user where id=$id ";
    Db::execute($sql);
    $_l="user.target";
endif;
if($_a=='get'):
    $sql="select * from v_target where id=$id";
    $row=Db::row($sql);
    echo $row?json_encode($row):'{}';
endif;
if($_a=='get-user'):
    $sql="select * from user_target where id=$id";
    $row=Db::row($sql);
    echo $row?json_encode($row):'{}';
endif;
if($_a=='active'):
    $sql="update target set etat='Activé' where id=$id";
    Db::execute($sql);
    $_l="user.target";
endif;
if($_a=='abort'):
    $sql="update target set etat='Annulé' where id=$id";
    Db::execute($sql);
    $_l="user.target";
endif;
if($_a=='link'):
    $r=Db::row("select * from v_user where id=$v_user");
    $fields=<<<EOT
{"nationalite":"{$r['nationalite']}","date_nais":"{$r['date_nais']}","poids":"{$r['poids']}","taille":"{$r['taille']}","groupe_sanguin":"{$r['groupe_sanguin']}","email":"{$r['email']}"}
EOT;
    $sql="update target set noms='{$r['nom']} {$r['postnom']} {$r['prenom']}',sexe='{$r['sexe']}',telephone='{$r['telephone']}',num_passeport='{$r['num_passeport']}',v_user=$v_user,fields='$fields' where id=$id";
    Db::execute($sql);
    $_l="user.target";
endif;
if($_a=='delete'):
    $sql="delete from target where id=$id";
    Db::execute($sql);
    $_l="user.target";
endif;