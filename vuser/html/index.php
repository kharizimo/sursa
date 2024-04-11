<?php 
$info=(int)Db::get("select if(groupe_sanguin is null or taille is null or date_nais is null,0,1) data from vuser where id={$_user['id']}");
$ident=(int)Db::get("select count(*) data from ident_vuser where id_vuser={$_user['id']}");

$complete_data= (boolean) $info && (boolean) $ident;

$n_pass=Db::get("select count(*) data from voyage where id_vuser={$_user['id']}");
$n_pass_attente=Db::get("select count(*) data from voyage where id_vuser={$_user['id']} and etat='En attente'");
$n_pass_valid=Db::get("select count(*) data from voyage where id_vuser={$_user['id']} and etat='Valide'");
$n_pass_annule=Db::get("select count(*) data from voyage where id_vuser={$_user['id']} and etat='Annulé'");

?>
</style>
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3><?=$n_pass?></h3>
        <p>Tous les pass</p>
      </div>
      <div class="icon">
      </div>
      <a href="#" class="small-box-footer"> &nbsp;</a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3><?=$n_pass_attente?></h3>
        <p>Pass en attente</p>
      </div>
      <div class="icon">
      </div>
      <a href="pass-list?_s=en-attente" class="small-box-footer">Ouvrir <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3><?=$n_pass_valid?></h3>
        <p>Pass validés</p>
      </div>
      <div class="icon">
      </div>
      <a href="pass-list?_s=valide" class="small-box-footer">Voir <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3><?=$n_pass_annule?></h3>
        <p>Pass annulés</p>
      </div>
      <div class="icon">
      </div>
      <a href="pass-list?_s=annule" class="small-box-footer">Voir <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4"><div class="card"><div class="card-body">
    <h3 class="text-center text-bold"><?=$_user['email']?></h3>
    <h5 class="text-center text-primary"><?=$_user['prenom']?> <?=$_user['nom']?> <?=$_user['postnom']?></h5>
    <div class="pt-3 m-auto" style="max-width:200px"><img src="<?="{$app_root}res/photo/{$_user['photo']}"?>" alt="" style="width:100%"></div>
    <hr>
    <div class="row"><div class="col-md-6 text-bold">Date de création</div><div class="text-right col-md-6"><?=$_user['dat_creat']?></div></div><hr>
    <div class="row"><div class="col-md-6 text-bold">Dernière mise à jour</div><div class="text-right col-md-6"><?=$_user['dat_edit']?></div></div><hr>
    <div class="row"><div class="col-md-6 text-bold">Etat</div><div class="text-right col-md-6"><?=ucfirst($_user['etat'])?></div></div>
  </div></div></div>
  <div class="col-md-8">
    <?php if(!$complete_data):?>
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-ban"></i>Informations réquises !</h5>
      Votre profil requiert des infomations manquants !<br>
      Nous vous recommandons de completer sans tarder les renseignements manquant pour profiter 
      pleinement des fonctionnalites de la plateforme SURSA<br>
      En cas de difficulté, merci de contacter l'Equipe SURSA<br><br>
      <div class="text-center"><a href="profil" class="btn btn-outline-light btn-lg" style="text-decoration:none">Aller au profil</a></div>
    </div>
    <script></script>
    <?php else:?>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-info"></i> Notification !</h5>
      <?php if(!$n_pass_attente):?>
      <b>Vous n'avez aucun pass sanitaire en attente.</b><br>
      N'hésitez pas à créer votre pass sanitaire lors de votre voyage entrant, sortant ou circulant 
      dans le sol congolais <br><br>
      <?php else:?>
        <b>Vous avez <?=$n_pass_attente?> pass sanitaires en attente.</b><br>
        Les résultats des validations et verifications vous serons transmis à temps réel<br>
        <b>L'Equipe SURSA vous souhaite un excellent voyage</b><br>
      <?php endif?>
      Merci de consulter notre site officiel pour s'enquérir des tous les détails 
      <div class="text-center mt-3"><a href="profil" class="btn btn-outline-light btn-lg" style="text-decoration:none">Visiter le site officiel</a></div>
    </div>
    <div class="alert alert-info alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-info"></i> Bon à savoir!</h5>
      <b>Savez-vous qu'en cas d'informations érronées ou froduleuses, vous courez jusqu'à 1.000.000 Fc d'amande ??</b>. <br>
      Nous vous recommandons fortement de bien verifier vos informations afin d'éviter toute pénalité ! <br>
      Bon voyage à vous ! <br><br>
      En cas de besoin nous vous prions de contacter l'équipe SURSA
      <div class="text-center mt-3"><a href="profil" class="btn btn-outline-light btn-lg" style="text-decoration:none">Aller au contact</a></div>
    </div>
    <?php endif?>
    
  </div>
</div>
<!-- /.row -->
<!-- Main row -->