<?php 
require_once 'msg.vars.php' ;
$_o=$_o??'common';
$__title=$_msgbox[$_o][$_a]['title']??$title;
$__url=$_msgbox[$_o][$_a]['url']??$url;
$__header=$_msgbox[$_o][$_a]['header']??'';
$__content=$_msgbox[$_o][$_a]['content']??'';
$__icon=$_msgbox[$_o][$_a]['icon']??'';

?>
<div class="row"><div class="col">
    <div class="card card-form">
        <?=$_card_header?>
        <div class="card-body text-center">
            <!-- Common -->
            <h1 class="text-center"><span class="fa fa-thumbs-<?=$__icon?> text-<?=$__icon=='up'?'danger':'secondary'?>"></span></h1>
            <h4 class="text-center"><?=$__header?></h4>
            <p class="lead"><?=$__content?></p>
            <div class="form-group text-center mt-5"><a href="<?=$__url?>" class="btn btn-danger">Retour <span class="fa fa-home"></span></a></div>
        </div>
        <?=$_card_footer?>
    </div>
</div></div>
<?php $title=Lang::translate($__title);
