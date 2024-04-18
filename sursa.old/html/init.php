<div class="row"><form action="engine/<?=$obj??'user'?>/init" class="col">
    <div class="card card-form">
        <input type="hidden" name="token" value="<?=$token??''?>">
        <?=$_card_header?>
        <div class="card-body">
            <h4></h4>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Nouveau mot de passe<span class="text-danger">*</span></label>
                        <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Mot de passe">
                    </div>
                </div>
            </div>
            <p class="lead text-center">Saisissez votre nouveau mot de passe.</p>
            <hr>
            <div class="row"><div class="col"><div class="form-group text-center"><input type="submit" value="Soumettre" class="btn btn-outline-danger"></div></div></div>
        </div>
        <?=$_card_footer?>
    </div>
</form></div>
<?php $title=Lang::translate("Réinitialisation du mot de passe")?>