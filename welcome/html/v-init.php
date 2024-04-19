<div class="row"><form action="engine/v-user/init" class="col">
    <div class="card card-form">
        <input type="hidden" name="mode" value="<?=$mode??'forgot'?>">
        <input type="hidden" name="id" value="<?=$id??''?>">
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
            <p class="lead text-center">Saisissez l'adresse e-mail utilisée pour créer votre compte</p>
            <hr>
            <div class="row"><div class="col"><div class="form-group text-center"><input type="submit" value="Envoyer" class="btn btn-outline-danger"></div></div></div>
        </div>
        <?=$_card_footer?>
    </div>
</form></div>
<?php $title=Lang::translate(($mode=='register'?"Initialisation ":"Réinitaliser ")."mot de passe")?>