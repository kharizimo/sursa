<?php 
$v_user=$_SESSION['v-user']??'';
$id=Db::get("select id data from voyage where code='$token' and date_exp>now()");
if(!$id){
    header("location:404");
    exit();
}
?>
<div class="row"><div class="col">
    <div class="card card-form">
        <?=$_card_header?>
        <div class="card-body">
            <div class="row">
                <div class="col m-auto text-auto">
                    <img style="width:200px; border-radius:10px; margin:20px auto;display:block" src="img/qrcode/<?=$id?>.png" alt="">
                </div>
            </div>
            <div class="row"><div class="col text-bold text-danger text-center mb-4">Votre Pass Sanitaire n'est valide que pendant 4 jours</div></div>
            <div class="row"><div class="col">
                <div class="form-group text-center"><a href="frame.php?token=<?=$token?>" target="_blank" class="btn btn-danger">Télécharger</a></div>
                <div class="form-group text-center"><a href="./" class="btn btn-outline-danger"> Accueil <span class="fa fa-home"></span></a></div>
            </div></div>
        </div>
        <?=$_card_footer?>
    </div>
</div></div>
<?php $title=Lang::translate("Passe sanitaire")?>