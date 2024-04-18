<div class="row"><form id="form" action="engine/v-user/pwd" class="col" method="post">
    <input type="hidden" id="id" name="id" value="<?=$_SESSION['v-user']?>">
    <div class="card card-form">
        <?=$_card_header?>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Ancien mot de passe<span class="text-danger">*</span></label>
                        <input type="password" id="old" name="old" class="form-control" placeholder="Mot de passe">
                    </div>
                    <div class="form-group">
                        <label for="">Nouveau mot de passe<span class="text-danger">*</span></label>
                        <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Mot de passe">
                    </div>
                    <div class="form-group">
                        <label for="">Confirmation<span class="text-danger">*</span></label>
                        <input type="password" id="confirm" name="confirm" class="form-control" placeholder="Mot de passe">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row"><div class="col"><div class="form-group text-center"><input type="submit" value="Soumettre" class="btn btn-outline-danger"></div></div></div>
        </div>
        <?=$_card_footer?>
    </div>
</form></div>
<?php $title=Lang::translate("Changer le mot de passe")?>