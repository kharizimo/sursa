<?php 
$id=$_SESSION['user']??0;
if($id){
    $data=Db::row("select * from user where id=$id");
}
?>
<div class="row"><form method="post" action="engine/user/update" class="col">
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="hidden" name="_l" value="../../profil">
    <div class="card card-form">
        <?=$_card_header?>
        <div class="card-body ">
            <div class="row">
                <div class="col m-auto">
                    <div class="form-group">
                        <label for="">Nom<span class="text-danger"></span></label>
                        <input type="text" id="nom" name="nom" value="<?=$data['nom']??''?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email<span class="text-danger"></span></label>
                        <input type="text" id="email" name="email" value="<?=$data['email']??''?>" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Téléphone<span class="text-danger"></span></label>
                        <input type="text" id="telephone" name="telephone" value="<?=$data['telephone']??''?>" class="form-control">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row"><div class="col"><div class="form-group text-center"><input type="submit" value="Mettre à jour" class="btn btn-outline-danger"></div></div></div>
        </div>
        <?=$_card_footer?>
    </div>
</form></div>
<?php $title=Lang::translate("Profil")?>