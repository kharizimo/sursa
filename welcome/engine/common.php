<?php 
if($_a=='mvt'):
    $_SESSION['mvt']=$mvt;
    if(isset($_SESSION['v-user'])){
        $_l="$mvt";
    }
    else{
        $_l="login-register";
    }
endif;
if($_a=='contact'):
    $url="{$_root}img/logo-sursa.png";
    Common::send_mail([      
        '_to'=>'contact@sursa.cd',  
        '_content'=>'contact',
        '_subject'=>'Contact',
        '_vars'=>compact('url','nom','sujet','email','message')
    ]);
    $_l='msg?_o=common&_a=contact';
endif;
if($_a=='lang'):
    $_SESSION['lang']=$lang;
endif;
if($_a=='villes'):
    $api=true;
    $data=Db::gets("select lib data from villes where province='$province'");
    echo json_encode($data);
endif;
if($_a=='get-ville'):
    $sql="select lib data from ville where province='$province'";
    $r=Db::gets($sql);
    echo $r?json_encode($r):'[]';
endif;