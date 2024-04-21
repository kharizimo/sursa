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