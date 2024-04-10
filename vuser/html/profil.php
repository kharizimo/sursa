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
                    <table class="table table-sm" id="ident">
                        <thead class="table-borderless"><tr>
                            <th>Type identité</th>
                            <th>Identifiant</th>
                            <th width="1%"></th>
                        </tr></thead><tbody></tbody>
                        <tfoot><tr>
                            <?php $except=Db::gets("select id data from ident_vuser where id_vuser={$_user['id']}")?>
                            <td><select id="ident-id" class="form-control form-control-sm"><?=Combo::data(Db::rows('select * from piece_identite'),['except'=>$except,'no_data'=>['','Selectionnez']])?></select></td>
                            <td><input id="ident-numero" class="form-control form-control-sm"></td>
                            <td><button id="ident-submit" type="button" class="btn btn-primary btn-sm">Ajouter</button></td>
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
                    <form action="engine/vuser/update" method="post">
                        <input type="hidden" name="id" value="<?=$_user['id']?>">
                        <input type="hidden" name="email" value="<?=$_user['email']?>">
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" name="nom" class="form-control" value="<?=$_user['nom']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Postnom</label>
                            <input type="text" name="postnom" class="form-control" value="<?=$_user['postnom']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Prenom</label>
                            <input type="text" name="prenom" class="form-control" value="<?=$_user['prenom']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Genre</label>
                            <select name="sexe" id="sexe" class="form-control">
                                <?=Combo::array(['M','F'],['default'=>$_user['sexe']])?>
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
                            <input type="text" name="telephone" id="telephone" placeholder="Téléphone" class="form-control iti-tel-input" value="<?=$_user['telephone']??''?>">
                        </div>
                        <hr>
                        <div class="row align-items-end">
                            <div class="col-md-4"><div class="form-group">
                                <label for="">Groupe sanguin</label>
                                <select name="groupe_sanguin" id="sgroupe_sanguin" class="form-control"><?=Combo::array(Vars::$groupe_sanguin,['default'=>$_user['groupe_sanguin'],'no_data'=>['','Sectionner']])?></select>
                            </div></div>
                            <div class="col-md-4"><div class="form-group">
                                <label for="">Poids</label>
                                <select name="poids" id="poids" class="form-control"><?=Combo::count([20,250],['default'=>$_user['poids'],'no_data'=>['','Sectionner']])?></select>
                            </div></div>
                            <div class="col-md-4"><div class="form-group">
                                <label for="">Taille</label>
                                <select name="taille" id="taille" class="form-control"><?=Combo::count([20,250],['default'=>$_user['taille'],'no_data'=>['','Sectionner']])?></select>
                            </div></div>
                        </div>         
                        <div class="form-group">
                            <label for="">Date de naissance</label>
                            <div class="row">
                                <div class="col-md-4 mb-2"><select name="dn_jour" id="dn_jour" class="form-control"><?=Combo::count([1,31],['zerofill'=>2,'default'=>$_user['dn_jour'],'no_data'=>['','Sectionner']])?></select></div>
                                <div class="col-md-4 mb-2"><select name="dn_mois" id="dn_mois" class="form-control"><?=Combo::count([1,12],['zerofill'=>2,'default'=>$_user['dn_mois'],'no_data'=>['','Sectionner']])?></select></div>
                                <div class="col-md-4 mb-2"><select name="dn_annee" id="dn_annee" class="form-control"><?=Combo::count([1930,date('Y')],['default'=>$_user['dn_annee'],'no_data'=>['','Sectionner']])?></select></div>
                            </div>
                        </div>               
                        <div class="form-group text-right"><input class="btn btn-primary" type="submit" value="Soumettre"></div>
                    </form>
                </div>
            </div>
        </div></div>
    </div>
</div>
