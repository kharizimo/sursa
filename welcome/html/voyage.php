<?php 

?>
<div class="row"><div class="col"><div class="card">
<?=$_card_header?>
    <div class="card-body"><form action="" id="form">
        <div class="row">
            <div class="col-md-6">
                <h4 class="bg-danger p-3 mb-3 " style="border-radius:5px">
                    <b>Mouvement <?=$mvt??'entrant'?></b>
                    <span class="<?=$_mvts[$mvt??'entrant']?> float-right"></span>
                </h4>
                <img src="<?=$app_root?>vuser/img/avatar/<?=$_vuser['photo']?>" style="max-width:200px;border-radius:10px" id="avatar" class="m-auto d-block" alt="">
                <hr>
                <div class="row">
                    <dl class="col-md-6">
                        <dt>Nom complet</dt>
                        <dd><?=$_vuser['nom']?> <?=$_vuser['postnom']?> <?=$_vuser['prenom']?></dd>
                    </dl>
                    <dl class="col-md-6">
                        <dt>Nationalité</dt>
                        <dd><?=$_vuser['nationalite']?></dd>
                    </dl>
                </div>
                <div class="row">
                    <dl class="col-md-6">
                        <dt>Email</dt>
                        <dd><?=$_vuser['email']?></dd>
                    </dl>
                    <dl class="col">
                        <dt>Téléphone</dt>
                        <dd><?=$_vuser['telephone']?></dd>
                    </dl>
                </div>
                <div class="row">
                    <dl class="col-md-6">
                        <dt>Genre</dt>
                        <dd><?=$_vuser['sexe']?></dd>
                    </dl>
                    <dl class="col">
                        <dt>Groupe sanguin</dt>
                        <dd><?=$_vuser['groupe_sanguin']?></dd>
                    </dl>
                </div>
                <div class="row">
                    <dl class="col-md-6">
                        <dt>Poids</dt>
                        <dd><?=$_vuser['poids']?></dd>
                    </dl>
                    <dl class="col">
                        <dt>Taille</dt>
                        <dd><?=$_vuser['taille']?></dd>
                    </dl>
                </div>
                <div class="row">
                    <dl class="col-md-6">
                        <dt>Date de naissance</dt>
                        <dd><?=$_vuser['date_nais']?></dd>
                    </dl>
                    <dl class="col">
                        <dt>Age</dt>
                        <dd><?=Db::get("select year(now())-year(date_nais) data from vuser where id={$_vuser['id']}")?></dd>
                    </dl>
                </div>
            </div>
            <div class="col">
                <h3>Informations du voyage</h3>
                <div class="form-group">
                    <label for="">Date de voyage</label>
                    <div class="row">
                        <div class="col"><select name="jour" id="jour" class="form-control"><?=Combo::count([1,31],['zerofill'=>2,'no_data'=>['','Jour']])?></select></div>
                        <div class="col-md-5"><select name="mois" id="mois" class="form-control"><?=Combo::array(Vars::$mois_fr,['no_data'=>['','Mois']])?></select></div>
                        <div class="col"><select name="annee" id="annee" class="form-control"><?=Combo::count([1930,date('Y')],['no_data'=>['','Année']])?></select></div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Pièce d'identité</label>
                        <select name="lib_identite" id="lib_identite" class="form-control">
                            <?=Combo::array(Db::gets("select lib data from identite_lib"),['no_data'=>['','Selectionnez la pièce']])?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Numero</label>
                        <input type="text" name="num_identite" id="num_identite" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Moyen de transport</label>
                    <select name="moyen_transport" id="moyen_transport" class="form-control"><?=combo::array(['Voie aérienne','Voie maritime','voie terrestre'],['no_data'=>['','Selectionnez moyen de transport']])?></select>
                </div>
                <div class="form-group position-relative precision">
                    <label for="">
                        Compagnie
                        <small class="position-absolute pt-1" style="right:0">
                            <label for="check_compagnie">Preciser</label> &nbsp;&nbsp;
                            <input type="checkbox" name="check_compagnie" id="check_compagnie">
                        </small>
                    </label>
                    <input type="hidden" name="compagnie" id="compagnie">
                    <input type="text" class="form-control d-none">
                    <select class="form-control select2"><?=Combo::array(Vars::$aeroports,['no_data'=>['','Selectionnez compagnie']])?></select>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">N° Vol, Bus, Bateau, ...</label>
                        <input type="text" name="n_voyage" id="n_voyage" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">N° Siège</label>
                        <input type="text" name="n_siege" id="n_siege" class="form-control">
                    </div>
                </div>
                <?php if($mvt=='entrant'):?>
                <div class="form-group">
                    <label for="">Pays de provenance</label>
                    <select name="pays_provenance" id="pays_provenance" class="form-control select2"><?=Combo::array(Vars::$pays_fr,['no_data'=>['','Selectionnez pays']])?></select>
                </div>
                <div class="form-group prov-loader">
                    <label for="">Province de destination</label>
                    <select name="province_destination" id="province_destination" class="form-control select2"><?=Combo::array(Vars::$provinces_rdc,['no_data'=>['','Selectionnez province']])?></select>
                </div>
                <div class="form-group position-relative precision">
                    <label for="">
                        Ville destination
                        <small class="position-absolute pt-1" style="right:0">
                            <label for="check_destination">Preciser</label> &nbsp;&nbsp;
                            <input type="checkbox" name="check_destination" id="check_destination">
                        </small>
                    </label>
                    <input type="hidden" id="ville_destination" name="ville_destination">
                    <input type="text" class="form-control d-none">
                    <select class="form-control">
                        <option value="">Aucune ville selectionnée</option>
                    </select>
                </div>
                <?php elseif($mvt=='sortant'):?>
                <div class="form-group prov-loader">
                    <label for="">Province actuelle</label>
                    <select name="province_actuelle" id="province_actuelle" class="form-control select2"><?=Combo::array(Vars::$provinces_rdc,['no_data'=>['','Selectionnez province']])?></select>
                </div>
                <div class="form-group position-relative precision">
                    <label for="">
                        Ville actuelle
                        <small class="position-absolute pt-1" style="right:0">
                            <label for="check_actuel">Preciser</label> &nbsp;&nbsp;
                            <input type="checkbox" id="check_actuel">
                        </small>
                    </label>
                    <input type="hidden" id="ville_actuelle" name="ville_actuelle">
                    <input type="text" class="form-control d-none">
                    <select class="form-control">
                        <option value="">Aucune ville selectionnée</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Pays de destination</label>
                    <select name="pays_destination" id="pays_destination" class="form-control"><?=Combo::array(Vars::$pays_fr,['no_data'=>['','Selectionnez pays']])?></select>
                </div>
                <?php elseif($mvt=='circulant'):?>
                <div class="form-group prov-loader ">
                    <label for="">Province actuelle</label>
                    <select name="province_actuelle" id="province_actuelle" class="form-control select2"><?=Combo::array(Vars::$provinces_rdc,['no_data'=>['','Selectionnez province']])?></select>
                </div>
                <div class="form-group position-relative precision">
                    <label for="">
                        Ville actuelle
                        <small class="position-absolute pt-1" style="right:0">
                            <label for="check_actuel">Preciser</label> &nbsp;&nbsp;
                            <input type="checkbox" id="check_actuel">
                        </small>
                    </label>
                    <input type="text" id="ville_actuelle" name="ville_actuelle" class="form-control d-none">
                    <select name="villes_actuelle" id="villes_actuelle" class="form-control">
                        <option value="">Aucune ville selectionnée</option>
                    </select>
                </div>
                <div class="form-group prov-loader">
                    <label for="">Province de destination</label>
                    <select name="province_destination" id="province_destination" class="form-control select2"><?=Combo::array(Vars::$provinces_rdc,['no_data'=>['','Selectionnez province']])?></select>
                </div>
                <div class="form-group position-relative precision">
                    <label for="">
                        Ville destination
                        <small class="position-absolute pt-1" style="right:0">
                            <label for="check_destination">Preciser</label> &nbsp;&nbsp;
                            <input type="checkbox" name="check_destination" id="check_destination">
                        </small>
                    </label>
                    <input type="text" id="ville_destination" name="ville_destination" class="form-control d-none">
                    <select name="villes_destination" id="villes_destination" class="form-control">
                        <option value="">Aucune ville selectionnée</option>
                    </select>
                </div>
                <?php endif?>
            </div>
        </div><hr>
        <div class="text-center mt-3"><button class="btn btn-danger btn-lg">Continuer</button></div>
    </form></div>
    <?=$_card_footer?>
</div></div></div>
<script>
    var identites=JSON.parse(`<?=$_vuser['identites'] ?>`)
    alert(identites['Passeport ordinaire'])
</script>