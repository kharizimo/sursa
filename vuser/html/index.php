<?php 
$info=(int)Db::get("select if(groupe_sanguin is null or taille is null or date_nais is null,0,1) data from vuser where id={$_user['id']}");
$ident=(int)Db::get("select count(*) data from ident_vuser where id_vuser={$_user['id']}");

$complete_data= (boolean) $info && (boolean) $ident;

?>
</style>
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>0</h3>
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
        <h3>0</h3>
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
        <h3>0</h3>
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
        <h3>0</h3>
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
    <div class="alert alert-info alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-info"></i> Alert!</h5>
      Vous n'avez jusque là effectuez aucun pass sanitaire. <br>
      Nous vous recommandons de créer votre pass avant d'arriver à destination ! <br>
      Bon voyage à vous !
    </div>
    <div class="alert alert-info alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-info"></i> Bon à savoir!</h5>
      <b>Savez-vous qu'en cas d'informations érronées ou froduleuses, vous courez jusqu'à 1.000.000 Fc d'amande ??</b>. <br>
      Nous vous recommandons fortement de bien verifier vos informations afin d'éviter toute pénalité ! <br>
      Bon voyage à vous !
    </div>
    <?php endif?>
    <div class="card">
    <div class="card-body p-0"><table class="table" id="table">
      <thead><tr>
        <th>Date de voyage</th>
        <th>Mouvement</th>
        <th width="1%"></th>
        <th width="1%"></th>
        <th>Etat</th>
        <th width="1%"></th>
      </tr></thead>
      <tbody>
        <tr>
          <td>2024-09-12</td>
          <td>Entant</td>
          <td><span class="fa fa-thumbs-up text-secondary"></span></td>
          <td><span class="fa fa-thumbs-up text-secondary"></span></td>
          <td>En cours</td>
          <td><a href="" class="btn btn-sm btn-default"><span class="fa fa-eye"></span></a></td>
        </tr>
        <tr>
          <td>2024-09-12</td>
          <td>Entant</td>
          <td><span class="fa fa-thumbs-up text-secondary"></span></td>
          <td><span class="fa fa-thumbs-up text-secondary"></span></td>
          <td>En cours</td>
          <td><a href="" class="btn btn-sm btn-default"><span class="fa fa-eye"></span></a></td>
        </tr>
        <tr>
          <td>2024-09-12</td>
          <td>Entant</td>
          <td><span class="fa fa-thumbs-up text-secondary"></span></td>
          <td><span class="fa fa-thumbs-up text-secondary"></span></td>
          <td>En cours</td>
          <td><a href="" class="btn btn-sm btn-default"><span class="fa fa-eye"></span></a></td>
        </tr>
        <tr>
          <td>2024-09-12</td>
          <td>Entant</td>
          <td><span class="fa fa-thumbs-up text-secondary"></span></td>
          <td><span class="fa fa-thumbs-up text-secondary"></span></td>
          <td>En cours</td>
          <td><a href="" class="btn btn-sm btn-default"><span class="fa fa-eye"></span></a></td>
        </tr>
      </tbody>
    </table></div>
    <div class="card-footer text-center"><a href="" class="btn btn-primary">Plus de voyage</a></div>
    </div>
    
  </div>
</div>
<!-- /.row -->
<!-- Main row -->