<div class="row"><form method="post" action="engine/v-user/login" class="col">
    <input type="hidden" name="mvt" value="<?=$mvt??''?>">
    <div class="card card-form">
        <?=$_card_header?>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <?php if(isset($err)):?>
                        <div class="alert alert-danger text-center">
                          <h5><i class="icon fas fa-ban"></i> Echec connexion</h5>
                          Adresse mail ou mot de passe incorrect !
                        </div>
                    <?php endif?>
                    <div class="form-group">
                        <label for="">Email<span class="text-danger">*</span></label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="">Mot de passe<span class="text-danger">*</span></label>
                        <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Mot de passe">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row"><div class="col"><div class="form-group text-center"><input type="submit" value="Connexion" class="btn btn-outline-danger"></div></div></div>
            <div class="row"><div class="col"><div class="form-group text-center"><a href="forgot?obj=v-user" class="text-danger text-bold">Mot de passe oublié</a></div></div></div>
        </div>
        <?=$_card_footer?>
    </div>
</form></div>
<?php $title=Lang::translate("Connexion")?>