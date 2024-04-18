<div class="row"><form method="post" action="engine/user/login" class="col">
    <input type="hidden" name="profil" value="s-admin">
    <div class="card card-form">
        <?=$_card_header?>
        <div class="card-body">
            <div class="row"><div class="col text-center"><span class="text-danger"><?=isset($err)?'Echec de connexion':''?></span></div></div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="">Mot de passe</label>
                        <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Mot de passe">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row"><div class="col"><div class="form-group text-center"><input type="submit" value="Connexion" class="btn btn-outline-danger"></div></div></div>
            <div class="row"><div class="col"><div class="form-group text-center"><a href="forgot?obj=user" class="text-danger text-bold">Mot de passe oublié</a></div></div></div>
        </div>
        <?=$_card_footer?>
    </div>
</form></div>
<?php $title=Lang::translate("Connexion utilisateur")?>