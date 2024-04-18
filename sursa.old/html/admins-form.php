<?php 
unset($data);
if($id){
    $data=Db::row("select * from user where id=$id");
}
?>
<div class="row"><form method="post" action="engine/user/<?=$id?'update':'insert'?>" class="col">
    <input type="hidden" name="id" value="<?=$id?>">
    <div class="card card-form">
        <?=$_card_header?>
        <div class="card-body">
            <div class="row">
                <div class="col m-auto">
                    <div class="form-group">
                        <label for="">Noms<span class="text-danger"></span></label>
                        <input type="text" id="nom" name="nom" value="<?=$data['nom']??''?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email<span class="text-danger"></span></label>
                        <input type="text" id="email" name="email" value="<?=$data['email']??''?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Téléphone<span class="text-danger"></span></label>
                        <input type="text" id="telephone" name="telephone" value="<?=$data['telephone']??''?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Profil<span class="text-danger"></span></label>
                        <select class="form-control" name="profil" id="profil"><?=Utils::combobox(['array'=>['admin']])?></select>
                    </div>
                    <div class="form-group">
                        <label for="">Etablissement<span class="text-danger"></span></label>
                        <select class="form-control" name="id_ets" id="id_ets"><?=Utils::combobox(['data'=>Db::rows("select id,lib from ets"),'default'=>$data['id_ets']??''])?></select>
                    </div>
                    <div class="form-group">
                        <label for="">Etat<span class="text-danger"></span></label>
                        <select class="form-control" name="etat" id="etat"><?=Utils::combobox(['list'=>['actif'=>'Actif',''=>'Non Actif']])?></select>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row"><div class="col"><div class="form-group text-center"><input type="submit" value="Soumettre" class="btn btn-outline-danger"></div></div></div>
        </div>
        <?=$_card_footer?>
    </div>
</form></div>
<?php $title=Lang::translate("Administrateurs")?>