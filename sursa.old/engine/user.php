<?php
if($_a=='logout'):
    unset($_SESSION['user']);
    $_l='login';
    
endif;
if($_a=='login'):
    $sql="select * from user where email='$email' and pwd='$pwd' and etat='actif'";
    $data=Db::row($sql);
    // print_r($sql);exit();
    if(!empty($data)){
        unset($_SESSION['user']);
        $_SESSION['user']=$data['id'];
        if($api??false)
            echo json_encode($data);
        $_l='';
    }
    else{$_l='login?err';}    
endif;
if($_a=='insert'):
    $f=['email','nom','telephone','id_poste','id_ets','pwd','profil'];
    $_REQUEST['pwd']=Utils::generate_password();
    $pwd=$_REQUEST['pwd'];
    extract(Utils::build_var_sql('insert',Utils::addslashes_array($_REQUEST),$f));
    $data=Db::row("select * from user where email='$email'");
    
    if(empty($data)){
        $sql="insert into user(etat $key) values('actif' $value)";
        Db::execute($sql);
        $url="{$_root}img/logo-sursa.png";
        $title="$nom";
        Common::send_mail([
            '_to'=>$email,  
            '_content'=>'activate',
            '_subject'=>'Activation du compte',
            '_vars'=>compact('url','title','email','pwd')
        ]);
        $_l="msg?_a=success";
    }
    else{$_l="msg?_a=fail";}
endif;
if($_a=='forgot'):
    $id=Db::get("select id data from user where email='$email'");
    if($id){
        $code=rand(10000,99999);
        Db::execute("insert into validate(obj,email,code,id,date_creat,date_exp) values('user','$email','$code','$id',now(),adddate(now(),interval 15 minute))");
        $url="{$_root}img/logo-sursa.png";
        Common::send_mail([
            '_to'=>$email,  
            '_content'=>'validate',
            '_subject'=>'Code de validation (Application)',
            '_vars'=>compact('code','url')
        ]);
        $_l="location:validate?obj=user&email=$email";
    }
endif;
if($_a=='validate'):
    $sql="select id,code from validate where obj='user' and code='$code' and email='$email' and date_exp>now() order by n desc limit 1";
    //Verifier si le code existe
    
    $data=Db::row($sql);
    if($data['id']??false){
        $n=Db::execute("insert into tokens(id,date_exp) values({$data['id']},adddate(current_timestamp,interval 90 day))");
        $token=md5($n);
        Db::execute("update tokens set token='$token' where n=$n");
        $_l="location:init?obj=user&token=$token&email=$email";
    }
    else{$_l="location:validate?obj=user&email=$email&err";}
    if($api??false){
        echo $token??'';
        exit();
    }
endif;
if($_a=='update'):
    $f=['email','nom','telephone','profil','id_poste','id_ets','etat'];
    extract(Utils::build_var_sql('update',Utils::addslashes_array($_REQUEST),$f));
    $sql="update user set id=$id $field where id=$id";
    Db::execute($sql);
    $_l="admins";       
endif;
if($_a=='delete'):
    $sql="delete from user id=$id";
    Db::execute($sql);
    $_l="admins";
    
    
endif;
if($_a=='init'):
    $id=Db::get("select id data from tokens where token='$token' and now()<date_exp");
    if($id){
        $etat=Db::get("select etat data from user where id=$id");
        if($etat){
            Db::execute("update user set pwd='$pwd' where id=$id");
            $_l="msg?_a=success";
        }
        else{$_l="msg?_a=fail";}
    }
    else{$_l="msg?_a=fail";}
    if($api??false){
        echo $_l;
        exit();
    }
    
endif;
if($_a=='pwd'):
    $id=$_SESSION['user'];
    $data=Db::get("select pwd data from user where id=$id");
    if($data==$old){
        if($pwd==$confirm){
            Db::execute("update user set pwd='$pwd' where id=$id");
            $_l="msg?_a=success";
        }
        else{$_l="msg?_a=confirm&_o=user";}
    }
    else{$_l="msg?_a=old&_o=user";}
endif;

if($_a=='select'):
    $clause='1=1 ';
    $clause.=isset($id_ets)?"and id_ets=$id_ets ":'';
    $sql="select * from user $clause";
    $data=Db::rows($sql);
    echo json_encode($data);
endif;
if($_a=='creat-super-code'):
    $id_user=$_SESSION['user'];
    $code=random_int(1234,9999);
    $exp="adddate(now(), interval 15 minute)";
    $sql="insert into super_code(id_user,code,exp) values($id_user,$code,$exp)";
    Db::execute($sql);
endif;
if($_a=='login-super-code'):
    $sql="select code data from super_code where id_user={$_SESSION['user']} and exp>now() order by date_creat desc limit 1";
    $data=Db::get($sql);
    if($code==$data){echo 'success';}
endif;