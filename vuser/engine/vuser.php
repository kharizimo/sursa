<?php 

function send_otp($options){
    
}

if($_a=='login'):
    extract(SQLs::addslashes_list(['email','pwd']));
    $sql="select * from vuser where email='$email' and pwd=sha1('$pwd')";
    $row=Db::row($sql);
    if($row){
        $_SESSION['vuser-id']=$row['id'];
        $_l='';
    }
    else{$_l='login?err';}
endif;
if($_a=='logout'):
    unset($_SESSION['vuser-id']);
    $_l='login';
endif;
if($_a=='get'):
    $r=Db::row("select * from vuser where id=$id");
    echo $r?json_encode($r):'{}';
endif;
if($_a=='register'):
    if(!Db::get("select 1 data from vuser where email='$email'")){

        $_REQUEST['pwd']=sha1($_REQUEST['pwd']);
        $_REQUEST['etat']='';
        
        $pattern=['email','nom','postnom','prenom','sexe','nationalite','pwd','etat'];
        $sql=SQLs::insert('vuser',$_REQUEST,$pattern);
        $id=Db::execute($sql);
        $token=sha1($id);
        
        $_l="otp?_s=activate&token=$token";
    }
    else{$_l='log?_s=register.exists';}

endif;
if($_a=='send-otp'):
    //ajax
    $otp_code=Utils::otp();
    $otp_exp='adddate(now(),interval 15 minute)';

    if($_s=='activate'){
        extract(Db::row("select id,email from vuser where sha1(id)='$token'"));
        Db::execute("update vuser set otp_code='$otp_code',otp_exp=$otp_exp where id=$id");
        ob_start();require '../mails/activate.php';$activate=ob_get_clean();
        Utils::send_mail([
            '_to'=>$email,  
            '_content'=>$activate,
            '_subject'=>'Activation du compte',
            '_vars'=>compact('otp_code')
        ]);
    }
endif;
if($_a=='process-otp'):
    if($_s=='activate'){
        $is_exp='if(now()<otp_exp,1,0) is_exp';
        $r=Db::row("select *,$is_exp from vuser where otp_code='$otp_code' and sha1(id)='$token'");
        if($r){
            if($r['is_exp']){
                Db::execute("update vuser set etat='Actif' where sha1(id)=$token");
                $_l="msg?_s=activate.success";
            }
            else{$_l="otp?token=$token&_s=activate&err=expired";}
        }
        else{$_l="otp?token=$token&_s=activate&err=fail";}
    }
endif;
if($_a=='insert'):
    $pattern=['email','nom','postnom','prenom','telephone','sexe','nationalite'];
    $sql=SQLs::insert('user',$_REQUEST,$pattern);
    Db::execute($sql);

    $_l='users';
endif;
if($_a=='update'):
    $_REQUEST['date_nais']="{$_REQUEST['dn_annee']}-{$_REQUEST['dn_mois']}-{$_REQUEST['dn_jour']}";
    $pattern=[
        'nom','postnom','prenom','telephone','sexe','nationalite',
        'groupe_sanguin','poids','taille','date_nais'
    ];
    $_REQUEST['telephone']=$_REQUEST['full_number'];
    $sql=SQLs::update('vuser',$_REQUEST,$pattern); print_r($sql);
    Db::execute($sql);
    //$_l='users';
endif;
if($_a=='pwd'):
    if(sha1($old)==$_user['pwd']){
        if($pwd==$confirm){
            $sql="update vuser set pwd=sha1('$pwd') where id={$_user['id']}";
            Db::execute($sql);
            $_l='log?_s=pwd.success';
        }
        else{$_l='log?_s=pwd.confirm';}
    }
    else{$_l='log?_s=pwd.old';}
    // echo$_user['pwd'];
    // exit();
endif;
if($_a=='ident-list'):
    $sql="select *,lib from ident_vuser u join piece_identite i using(id) where id_vuser={$_user['id']}";
    $r=Db::rows($sql);
    echo $r?json_encode($r):'[]';
endif;
if($_a=='ident-add'):
    extract(SQLs::addslashes_array($_REQUEST));
    $sql="insert into ident_vuser(id_vuser,id,numero) values({$_user['id']},$id,'$numero')";
    Db::execute($sql);
endif;

if($_a=='ident-del'):
    $sql="delete from ident_vuser where id=$id and id_vuser={$_user['id']}";
    Db::execute($sql);
endif;
//API FOR DATA
if($_a=='index.table'):
    $sql="select * from voyage where id_vuser={$_user['id']}";
    $r=Db::rows($sql);
    echo $r?json_encode($r):'[]';
endif;