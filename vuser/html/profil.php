<div class="row">
    <div class="col">
        <div class="card"><div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h1><?=$_user['email']?></h1>
                    <h4 class="text-muted">Profil</h4>
                    <hr>
                    <img src="img/avatar/<?=$_user['photo']?>" style="max-width:200px" id="avatar" class="m-auto d-block" alt="">
                    <hr>                
                    <table class="table table-sm" id="table" data-id="<?=$_user['id']?>">
                        <thead class="table-borderless"><tr>
                            <th>Type identité</th>
                            <th>Identifiant</th>
                            <th width="1%"></th>
                        </tr></thead>
                        <tbody></tbody>
                        <tfoot><tr>
                                <td><select name="" id="" class="form-control form-control-sm"><?=Combo::array(Db::gets('select lib data from piece_identite'))?></select></td>
                                <td><input name="" id="" class="form-control form-control-sm"></td>
                                <td><button type="button" class="btn btn-primary btn-sm">Ajouter</button></td>
                        </tr></tfoot>
                    </table> 
                    <hr>
                    <div class="row">
                        <dl class="col-md-6">
                            <dt>Date création</dt>
                            <dd><?=$_user['dat_creat']?></dd>
                        </dl>
                        <dl class="col-md-6">
                            <dt>Dernière modification</dt>
                            <dd><?=$_user['dat_edit']?></dd>
                        </dl>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" class="form-control" value="<?=$_user['nom']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Postnom</label>
                            <input type="text" class="form-control" value="<?=$_user['postnom']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Prenom</label>
                            <input type="text" class="form-control" value="<?=$_user['prenom']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Genre</label>
                            <select name="sexe" id="sexe" class="form-control">
                                <?=Combo::array(['M','F'],['default'=>$_user['sexe']??'M'])?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nationalité</label>
                            <select name="nationalite" id="nationalite" class="form-control">
                            <?=Combo::array(Vars::$pays_fr)?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Téléphone</label><br>
                            <input type="text" class="form-control iti-tel-input">
                        </div>
                        <hr>
                        <div class="row align-items-end">
                            <div class="col-md-4"><div class="form-group">
                                <label for="">Groupe sanguin</label>
                                <select name="" id="" class="form-control"><?=Combo::array(Vars::$groupe_sanguin)?></select>
                            </div></div>
                            <div class="col-md-4"><div class="form-group">
                                <label for="">Poids</label>
                                <select name="" id="" class="form-control"><?=Combo::count([20,250])?></select>
                            </div></div>
                            <div class="col-md-4"><div class="form-group">
                                <label for="">Taille</label>
                                <select name="" id="" class="form-control"><?=Combo::count([20,250])?></select>
                            </div></div>
                        </div>         
                        <div class="form-group">
                            <label for="">Date de naissance</label>
                            <div class="row">
                                <div class="col-md-4 mb-2"><select name="" id="" class="form-control"><?=Combo::count([1,31],['zerofill'=>2])?></select></div>
                                <div class="col-md-4 mb-2"><select name="" id="" class="form-control"><?=Combo::count([1,12],['zerofill'=>2])?></select></div>
                                <div class="col-md-4 mb-2"><select name="" id="" class="form-control"><?=Combo::count([1930,date('Y')])?></select></div>
                            </div>
                        </div>               
                        <div class="form-group text-right"><input class="btn btn-primary" type="submit" value="Soumettre"></div>
                    </form>
                </div>
            </div>
        </div></div>
    </div>
</div>