<?php 
if($_a=='lock'):
    $_SESSION['lock-url']=$_q;
    $_l='lock-screen';
endif;
if($_a=='unlock'):
    extract(SQLs::addslashes_list(['pwd']));
    $sql="select * from user where id={$_SESSION['user-id']} and pwd='$pwd' and etat=true";
    $row=Db::row($sql);
    if($row){
        $_l=$_SESSION['lock-url'];
        unset($_SESSION['lock-url']);
    }
    else{$_l='lock-screen?err';}
    
endif;
if($_a=='lock-screen'):
    extract(SQLs::addslashes_list(['pwd']));
    $sql="select * from user where id={$_SESSION['vuser-id']} and pwd='$pwd' and etat=true";
    $row=Db::row($sql);
    if($row){$_l='';}
    else{$_l='lock-screen?err';}
endif;
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
    $pattern=['email','nom','postnom','prenom','sexe','nationalite'];
    $sql=SQLs::insert('vuser',$_REQUEST,$pattern);
    Db::execute($sql);
    $_l='users';
endif;
    
if($_a=='insert'):
    $pattern=['nom','pseudo','telephone','email','adresse','info','profil','etat'];
    $sql=SQLs::insert('user',$_REQUEST,$pattern);
    Db::execute($sql);
    $_l='users';
endif;
if($_a=='update'):
    $pattern=['nom','pseudo','telephone','email','adresse','info','profil','etat'];
    $sql=SQLs::update('user',$_REQUEST,$pattern); echo$sql;
    Db::execute($sql);
    $_l='users';
endif;