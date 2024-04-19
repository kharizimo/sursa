<div class="row"><form action="engine/v-user/activate" method="post" class="col">
    <div class="card card-form">
        <input type="hidden" name="id" value="<?=$id??''?>">
        <?=$_card_header?>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="form-group">
                        <label for="">Nouveau mot de passe<span class="text-danger">*</span></label>
                        <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Mot de passe">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row"><div class="col"><div class="form-group text-center"><input type="submit" value="Initialiser" class="btn btn-outline-danger"></div></div></div>
        </div>
        <?=$_card_footer?>
    </div>
</form></div>
<?php $title=Lang::translate("Activation du Compte")?>