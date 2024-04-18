<?php

?>
<div class="row">
    <div class="col-md-6 m-auto">
        <div class="card"><div class="card-body">
            <div class="row">
                <div class="col-md">
                    <form action="engine/user/update" method="post">
                        <input type="hidden" name="id" value="<?=$_user['id']?>">
                        <div class="form-group">
                            <label for="">Email</label>
                            <span class="form-control"><?=$_user['email']?></span>
                        </div>
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" name="nom" class="form-control" value="<?=$_user['nom']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Téléphone</label><br>
                            <input type="text" name="telephone" id="telephone" placeholder="Téléphone" class="form-control iti-tel-input" value="<?=$_user['telephone']??''?>">
                        </div>
                        <hr>                              
                        <div class="form-group">
                            <label for="">Etablissement</label>
                            <span class="form-control"><?=$_user['lib_ets']?></span>
                        </div>
                        <div class="form-group">
                            <label for="">Poste</label>
                            <span class="form-control"><?=$_user['lib_poste']?></span>
                        </div>
                        <div class="form-group">
                            <label for="">Profil</label><br>
                            <span class="form-control"><?=$_user['profil']?></span>
                        </div>
                        <div class="form-group text-center"><input class="btn btn-primary" type="submit" value="Soumettre"></div>
                    </form>
                </div>
            </div>
        </div></div>
    </div>
</div>
