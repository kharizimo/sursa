<?php 

$r=Db::row("select *,year(now())-year(date_nais) age from vuser");
$r['photo']=is_file("../res/photo/{$r['photo']}")?$r['photo']:'0.jpg';
// fixture
$r['mvt']='entrant';
$r['date_voyage']='2024-02-01';
$r['moyen_transport']='Aérien';
$r['compagnie']='Ethiopan Airlines';
?>
<div class="row"><div class="col"><div class="card"><div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <h2><?=$r['email']?></h2>
            <h4 class="text-muted"><?="{$r['nom']} {$r['postnom']} {$r['prenom']}"?></h4>
            <hr>
            <img src="../res/photo/<?=$r['photo']?>" style="max-width:200px" id="avatar" class="m-auto d-block" alt="">
            <div class="row">
                <dl class="col-md-6">
                    <dt>Date de naissance</dt>
                    <dd><?=$r['date_nais']?></dd>
                </dl>
                <dl class="col-md-6">
                    <dt>Age</dt>
                    <dd><?=$r['age']?></dd>
                </dl>
            </div>
            <div class="row">
                <dl class="col-md-6">
                    <dt>Genre</dt>
                    <dd><?=$r['sexe']?></dd>
                </dl>
                <dl class="col-md-6">
                    <dt>Carte d'electeur</dt>
                    <dd>8268638263828</dd>
                </dl>
            </div>
            <div class="row">
                <dl class="col-md-6">
                    <dt>Nationalité</dt>
                    <dd><?=$r['nationalite']?></dd>
                </dl>
                <dl class="col-md-6">
                    <dt>Téléphone</dt>
                    <dd><?=$r['telephone']?></dd>
                </dl>
            </div>
            <div class="row">
                <dl class="col-md-6">
                    <dt>Groupe sqnguin</dt>
                    <dd><?=$r['groupe_sanguin']?></dd>
                </dl>
                <dl class="col-md-6">
                    <dt>Poids</dt>
                    <dd><?=$r['poids']?></dd>
                </dl>
            </div>
            <hr>
            <div class="row">
                <dl class="col-md-6">
                    <dt>Validation</dt>
                    <dd>2024-12-12 07:01:00</dd>
                </dl>
                <dl class="col-md-6">
                    <dt>Verification</dt>
                    <dd>2024-12-12 07:01:00</dd>
                </dl>
            </div>
            <hr>
            <div class="m-auto shadow-sm p-2" style="max-width:250px; background:white; border-radius:10px; ">
                <img src="img/avatar/0.jpg" style="width:100%" id="avatar" alt="">
            </div>
            <div class="text-center mt-4"><a href="" class="btn btn-primary">Télécharger</a></div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Mouvement</label>
                    <input type="text" value="<?=ucfirst($r['mvt'])??''?>" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Date de voyage</label>
                    <input type="text" value="<?=$r['mvt']??''?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="">Moyen de transport</label>
                <input type="text" value="<?=$r['moyen_transport']??''?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Compagnie</label>
                <input type="text" value="<?=$r['compagnie']??''?>" class="form-control">
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Vol, Bus, Bateau</label>
                    <input type="text" value="<?=$r['mvt']??''?>" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Date de voyage</label>
                    <input type="text" value="<?=$r['mvt']??''?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="">Pays de provenance</label>
                <input type="text" value="<?=$r['compagnie']??''?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Province actuelle</label>
                <input type="text" value="<?=$r['compagnie']??''?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Ville actuelle</label>
                <input type="text" value="<?=$r['compagnie']??''?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Pays de destination</label>
                <input type="text" value="<?=$r['compagnie']??''?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Province de destination</label>
                <input type="text" value="<?=$r['compagnie']??''?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Ville de destination</label>
                <input type="text" value="<?=$r['compagnie']??''?>" class="form-control">
            </div>
            <div class="form-group">
                <input type="checkbox" name="" id="">
                <label for="">Avez-vous de la fièvre ?</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="" id="">
                <label for="">Avez-vous un syndrôme grippal (Grippe) ?</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="" id="">
                <label for="">Toussez-vous ?</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="" id="">
                <label for="">Avez-vous des difficultés respiratoires ?</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="" id="">
                <label for="">Avez-vous une assurance maladie ?</label>
            </div>
            <div class="form-group">
                <label for="">Autres symptômes ou plaintes</label>
                <textarea name="" id="" class="form-control"></textarea>
            </div>
        </div>
    </div>
    
</div></div></div></div>