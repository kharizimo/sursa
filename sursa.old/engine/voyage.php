<?php 
if($_a=='tmp-insert'):
    $_SESSION['tmp']=$_REQUEST;
    $_SESSION['tmp']['date_voyage']=date('Y-m-d',strtotime("$annee_voyage-$mois_voyage-$jour_voyage"));
    if(strtotime($_SESSION['tmp']['date_voyage'])<time()){
        $_l="msg?_a=date&_o=voyage";
    }
    else{$_l="notice";}
endif;
if($_a=='insert'):
    $f=['id_v_user','lang','date_voyage','pays_origine','pays_visite','pays_destination',
    'province_actuelle','province_destination','ville_actuelle','ville_destination',
    'voie_transport','compagnie','n_transport','n_siege','fievre','sensation_fievre',
    'test_covid','autres_symptomes','toux','difficultes_respiratoires','code',
    'type_doc_voyage','num_doc_voyage',
    'assurance_maladie','adresse','nom_contact','telephone_contact','mvt'];

    $_SESSION['tmp']['id_v_user']=$_SESSION['v-user']??'';
    $_SESSION['tmp']['telephone_contact']=$_SESSION['tmp']['full_number'];
    $_SESSION['tmp']['autres_symptomes']=$_SESSION['tmp']['autres_symptomes']??'R.A.S';
    $_SESSION['tmp']['code']=session_id().time();

    extract(Utils::build_var_sql('insert',Utils::addslashes_array($_SESSION['tmp']),$f));
    $sql="insert into voyage(date_exp $key) values(adddate(now(),interval 4 day) $value)";
    $_id=Db::execute($sql);
    
    //Qr code
    require '../phpqrcode/phpqrcode.php';
    QRcode::png($_SESSION['tmp']['code'],"../img/qrcode/$_id.png");
    
    //Send mail
    extract(Db::row("select prenom,email from v_user where id={$_SESSION['v-user']}"));
    $frame="{$_root}frame.php?token={$_SESSION['tmp']['code']}";
    $url="{$_root}img/logo-sursa.png";
    Common::send_mail([      
        '_to'=>$email,  
        '_content'=>'pass',
        '_subject'=>'Confirmation de votre PASS Sanitaire',
        '_vars'=>compact('url','prenom','frame')
    ]);

    
    //unset($_SESSION['tmp']);
    $_l="response?token={$_SESSION['tmp']['code']}";
    
endif;

if($_a=='scan'): 
    //$id=Db::get("select id data from tokens where token='$token'");
    $u="nom,postnom,prenom,num_passeport,sexe,taille,poids,date_nais,telephone,email,photo,nationalite";
    $sql="select v.*,$u from voyage v join v_user u on u.id=v.id_v_user where v.code='$token'";
    $ret=Db::row($sql);
    if($ret){
        //target
        $target=Db::get("select etat from target where v_user={$ret['id']}");
        if(!$target){
            $clause="(({$ret['nom']}<>'' and noms like '%{$ret['nom']}%')"
            ." or ({$ret['postnom']}<>'' and noms like '%{$ret['postnom']}%')"
            ." or ({$ret['prenom']}<>'' and noms like '%{$ret['prenom']}%')"
            ." or ({$ret['sexe']}<>'' and noms like '%{$ret['sexe']}%'))"
            ." and (telephone='{$ret['telephone']}' or num_passeport='{$ret['num_passeport']}')"
            ;
            $target=Db::get("select etat from target where $clause");
        }
        $ret['target']=$target;
        // Archive
        $ret['a_photo']=Db::rows("select * from archive_photo where v_user={$ret['id']}");
        $ret['a_field']=Db::rows("select * from archive_field where v_user={$ret['id']}");

    }
    echo $ret?json_encode($ret):'{}';
endif;
if($_a=='update'):
    $fields="id=$id";
    $fields.=isset($id_verif)?",id_verif=$id_verif,etat_verif=$etat_verif,date_verif=now()":'';
    $fields.=isset($id_valid)?",id_valid=$id_valid,etat_valid=$etat_valid,date_valid=now()":'';
    $sql="update voyage set $fields where id=$id";
    Db::execute($sql);
endif;
if($_a=='set-analyse-mvt'){
    $_SESSION['analyse_mvt']=$index;
}
if($_a=='set-analyse-chrono'){
    $_SESSION['analyse_chrono']=$index;
}