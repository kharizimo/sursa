<?php 
$info=(int)Db::get("select if(groupe_sanguin is null or taille is null or date_nais is null,0,1) data from vuser where id={$_user['id']}");
$ident=(int)Db::get("select count(*) data from ident_vuser where id_vuser={$_user['id']}");

$complete_data= (boolean) $info && (boolean) $ident;

$n_pass_verif=Db::get("select count(*) data from voyage where id_verif={$_user['id']}");
$n_pass_valid=Db::get("select count(*) data from voyage where id_valid={$_user['id']}");
$n_pass_annule=Db::get("select count(*) data from voyage where id_annul={$_user['id']}");
$n_target=Db::get("select count(*) data from target where id_target={$_user['id']}");
$n_untarget=Db::get("select count(*) data from target where id_untarget={$_user['id']}");
$n_link=Db::get("select count(*) data from target where id_link={$_user['id']}");
?>
<div class="row">
  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Pass validés</span>
        <span class="info-box-number"><?=$n_pass_valid?></span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Pass verifiés</span>
        <span class="info-box-number"><?=$n_pass_verif?></span>
      </div>
    </div>
  </div>
  <div class="clearfix hidden-md-up"></div>
  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Pass annulés</span>
        <span class="info-box-number"><?=$n_pass_annule?></span>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Targets posés</span>
        <span class="info-box-number"><?=$n_target?></span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Target levés</span>
        <span class="info-box-number"><?=$n_untarget?></span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Target liés</span>
        <span class="info-box-number"><?=$n_link?></span>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4 pt-5 text-center">
    <div class="lead">Dimanche</div>
    <div class="lead text-bold h3">14 Avril 2024</div>
    <h1 class="">12:01</h1>
  </div>
  <div class="col-md-8">
    
    
  </div>
</div>
<!-- /.row -->
<!-- Main row -->