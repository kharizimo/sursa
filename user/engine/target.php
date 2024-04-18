<?php 
$_SESSION['ident']=$_SESSION['ident']??[];
if($_a=='ident-insert'):
    $_SESSION['ident'][]=['lib'=>$lib,'numero'=>$numero];
endif;
if($_a=='ident-del'):
    $_SESSION['ident']=array_filter($_SESSION['ident'],function($e){
        global $id;
        return $e!=$id;
    },ARRAY_FILTER_USE_KEY);
endif;
if($_a=='ident-table'):
    $t= array_map(function($e){
        $btn='<button data-id="" class="btn btn-danger btn-sm">supprimer</button>';
        return [$e['lib'],$e['numero'],$btn];
    },$_SESSION['ident']);
    echo json_encode((object)['data'=>$t]);
endif;