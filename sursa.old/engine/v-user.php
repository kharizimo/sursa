<?php 
if($_a=='login'): 
    $sql="select * from v_user where email='$email' and pwd='$pwd' and etat='actif'";
    $data=Db::row($sql);
    if(!empty($data)){
        unset($_SESSION['user']);
        $_SESSION['v-user']=$data['id'];
        $_l=$_mvt;
    }
    else{$_l='v-login?err';}
endif;

if($_a=='insert'):
    $loaded=$loaded??false;
    extract(Utils::addslashes_array($_REQUEST));
    $_REQUEST['date_nais']=($annee_nais??'').'-'.($mois_nais??'').'-'.($jour_nais??'');
    $_REQUEST['telephone']=$full_number;
    $_REQUEST['pwd']=Utils::generate_password();
    $pwd=$_REQUEST['pwd'];
    
    $f=[
        'email','pwd','nom','postnom','prenom','sexe','groupe_sanguin','poids','taille',
        'telephone','num_passeport','type_piece','autre_piece','date_nais','nationalite'
    ];
    extract(Utils::build_var_sql('insert',Utils::addslashes_array($_REQUEST),$f));
    $data=Db::get("select 1 data from v_user where email='$email'");
    
    if(!$data){
        if($loaded){
            $sql="insert into v_user(etat $key) values('actif' $value)";
            $id=Db::execute($sql);//echo$sql;exit();
            //load photo
            if(isset($_FILES) && ($loaded)){
                $ext=strtolower(pathinfo(basename($_FILES['photo']['name']),PATHINFO_EXTENSION));
                $file=$id.'-0.'.$ext;
                move_uploaded_file($_FILES['photo']['tmp_name'],"../img/avatar/$file");
                Db::execute("update v_user set photo='$file' where id=$id");
            }
            //send mail
            $url="{$_root}img/logo-sursa.png";
            $title=$prenom;
            Common::send_mail([
                '_to'=>$email,  
                '_content'=>'activate',
                '_subject'=>'Nouveau compte',
                '_vars'=>compact('email','pwd','url','title')
            ]);
            $_l='msg?_a=insert&_o=user';
        }
        else{$_l='msg?_a=photo&_o=user';}
    }
    else{$_l='msg?_a=exists&_o=user';}
endif;

if($_a=='update'):
    $_REQUEST['date_nais']=($annee_nais??'').'-'.($mois_nais??'').'-'.($jour_nais??'');
    $_REQUEST['telephone']=$full_number;

    $f=[
        'email','nom','postnom','prenom','sexe','groupe_sanguin','poids','taille',
        'telephone','num_passeport','type_piece','autre_piece','date_nais','nationalite'
    ];
    $old=Db::row("select * from v_user where id=$id");
    $new=$_REQUEST;
    $archive=[];$ph='';
    foreach($f as $v){
        if($old[$v]!=$new[$v]){
            $archive[$v]=$old[$v];
        }
    }
    
    $loaded=$loaded??false;
    extract(Utils::build_var_sql('update',Utils::addslashes_array($_REQUEST),$f));
    $data=Db::get("select 1 data from v_user where email='$email'");
    //exit();
    if($data){
        $sql="update v_user set id=$id $field where id=$id";
        Db::execute($sql);
        if($archive){
            $field=json_encode($archive);
            $sql="insert into archive_field(v_user,field) values($id,'$field')";
            Db::execute($sql);
        }
        
        if(isset($_FILES) && ($loaded)){
            
            $ext=strtolower(pathinfo(basename($_FILES['photo']['name']),PATHINFO_EXTENSION));
            for($i=0;$i<=100;$i++){
                $file=$id."-$i.".$ext;
                if(is_file("../img/avatar/$file")) 
                    continue;
                else
                    break;
            }
            move_uploaded_file($_FILES['photo']['tmp_name'],"../img/avatar/$file");
            Db::execute("update v_user set photo='$file' where id=$id");
            $photo=$old['photo'];
            $sql="insert into archive_photo(v_user,photo) values($id,'$photo')";
            Db::execute($sql);            
        }
        $_l='msg?_a=success';
    }
    else{$_l='msg?_a=fail';}
    extract(Utils::addslashes_array($_REQUEST));
    $can_run=true;
    if(isset($pwd)&&isset($etat)){
        //activation
        $data=Db::row("select * from v_user where id=$id");
        if(empty($data)){
            $can_run=false;
            $_l="v-usermsg?_a=not_exists&_o=user";
        }
        else{
            if($data['etat']){
                $can_run=false;
                $_l='v-usermsg?v_activate_actif';
            }
        }
    }
    
endif;
if($_a=='forgot'):
    extract(Db::row("select id,prenom from v_user where email='$email'"));
    if($id){
        $code=rand(10000,99999);
        $date_exp='adddate(now(),interval 30 minute)';
        Db::execute("insert into validate(obj,email,code,id,date_exp) values('v-user','$email','$code','$id',$date_exp)");
        $url="{$_root}img/logo-sursa.png";
        $title=$prenom;
        Common::send_mail([
            '_to'=>$email,  
            '_content'=>'validate',
            '_subject'=>'Code de reinitialisation de mot de passe',
            '_vars'=>compact('code','prenom','url')
        ]);
        $_l="validate?obj=v-user&email=$email";
    }
    else{$_l='msg?_a=not_exists&_o=user';}
endif;
if($_a=='validate'):
    $sql="select id,code from validate where obj='v-user' and email='$email' and date_exp>now() order by n desc limit 1";
    //Verifier si le code existe
    $data=Db::row($sql);
    //print_r($sql);exit();
    if($data['id']){
        if($code==$data['code']){
            $date_exp='adddate(now(),interval 30 minute)';
            $n=Db::execute("insert into tokens(id,date_exp) values({$data['id']},$date_exp)");
            $token=md5($n);
            Db::execute("update tokens set token='$token' where n=$n");
            $_l="init?obj=v-user&token=$token&email=$email";
        }
        else{$_l="validate?obj=v-user&email=$email&err";}
    }
    else{$_l="msg?_a=fail";}
endif;
if($_a=='init'):
    $id=Db::get("select id data from tokens where token='$token' and now()<date_exp order by n desc limit 1");
    if($id){
        $etat=Db::get("select etat data from v_user where id=$id");
        if($etat){
            Db::execute("update v_user set pwd='$pwd' where id=$id");
            $_l="msg?_a=success";
        }
        else{$_l="msg?_a=fail";}
    }
    else{$_l="msg?_a=fail";}
endif;
if($_a=='pwd'):
    $id=$_SESSION['v-user'];
    $data=Db::get("select pwd data from v_user where id=$id");
    if($data==$old){
        if($pwd==$confirm){
            Db::execute("update v_user set pwd='$pwd' where id=$id");
            $_l="msg?_a=success";
        }
        else{$_l='msg?_a=confirm&_o=user';}
    }
    else{$_l='msg?_a=old&_o=user';}
    
endif;
if($_a=='activate'):
    $data=Db::row("select * from v_user where id=$id");
    if(!empty($data)){
        if(!$data['etat']){
            Db::execute("update v_user set pwd='$pwd' where id=$id");
            $_l='v-usermsg?activate_success';
        }
        else{$_l='v-usermsg?activate_error';}
    }
    else{$_l='v-usermsg?account_exists';}
endif;
if($_a=='logout'):
    session_destroy();
    $_l='';
endif;
if($_a=='archive-field'):
    $row=Db::row("select * from v_archive_field where id=$id");
    if(isset($row['field'])){$row['field']=json_decode($row['field']);}
    echo $row?json_encode($row):'{}';
endif;
if($_a=='archive-photo'):
    $row=Db::row("select * from v_archive_photo where id=$id");
    echo $row?json_encode($row):'{}';
endif;
if($_a=='get'):
    $sql="select * from v_user where id=$id";
    $r=Db::row($sql);
    echo $r?json_encode((object)$r):'{}';
endif;