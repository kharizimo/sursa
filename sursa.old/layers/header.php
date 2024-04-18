<?php 
$_id=$_SESSION['v-user']??0;
$a=Db::get("select photo data from v_user where id=$_id");
$a_nom=Db::get("select concat(nom,' ',mid(upper(prenom),1,1),'.') data from v_user where id=$_id");
$avatar=is_file("img/avatar/$a")?"img/avatar/$a":"img/avatar/0.png";
$home='./';
$user_home='user.home';
$user_title="Espace utilisateur";
if(preg_match('/user/',$_c)){
  $home='user.home';
  $user_home='./';
  $user_title="Aller au site";

}
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="<?=$home?>" class="navbar-brand">
        <img src="img/logo-sursa.png" alt="AdminLTE Logo" class="brand-image " style="">
        <span class="brand-text font-weight-light"></span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item"><a href="<?=$home?>" class="nav-link"><span class="fa fa-home"></span> <?=Lang::translate("Accueil")?></a></li>
          <li class="nav-item"><a href="contact" class="nav-link"><?=Lang::translate("Contact")?></a></li>
          <li class="nav-item"><a href="about" class="nav-link"><?=Lang::translate("A propos")?></a></li>
          <li class="nav-item"><a href="<?=$user_home?>" class="nav-link"><span class="fa fa-globe"></span> <?=Lang::translate($user_title)?></a></li>
          <?php if(isset($_SESSION['user'])):?>
          <li class="nav-item dropdown d-none">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><?=Lang::translate("Espace Utilisateur")?></a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="profil" class="dropdown-item text-bold">Mon profil</a></li>
              <li><a href="pwd" class="dropdown-item">Changer mot de passe</a></li><hr>
              <li><a href="admins" class="dropdown-item">Administrateurs</a></li>
              <li><a href="ets" class="dropdown-item">Etablissements</a></li>
              <li><a href="poste" class="dropdown-item">Postes</a></li>
              <!-- End Level two -->
            </ul>
          </li>
          <?php endif?>
        </ul>
      </div> 

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        
        <!-- Language Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#"><i class="flag-icon flag-icon-<?=Lang::$lang?>"></i></a>
          <div class="dropdown-menu dropdown-menu-right p-0">
              <a href="engine/common/lang?lang=fr" class="dropdown-item <?=Lang::$lang=='fr'?'active':''?>"><i class="flag-icon flag-icon-fr mr-2"></i> French</a>
              <a href="engine/common/lang?lang=us" class="dropdown-item <?=Lang::$lang=='us'?'active':''?>"><i class="flag-icon flag-icon-us mr-2"></i> English</a>
          </div>
        </li>

        <?php if(!isset($_SESSION['v-user'])):?>
        <li class="nav-item ">
          <a class="nav-link"  href="login-register"><i class="far fa-user"></i></a>
        </li>
        <?php endif ?>
        <!-- Notifications Dropdown Menu -->
        <?php if(isset($_SESSION['v-user'])):?>
        <li class="nav-item dropdown">
          <a title="Connexion Espace voyageur" class="nav-link" data-toggle="dropdown" href="#">
            <!-- <i class="far fa-user"></i> -->
            <img src="<?=$avatar?>" height="100%" alt=""> <?=$a_nom?>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right <?=isset($_SESSION['v-user'])?'':'d-none'?>">
            <a href="#" class="dropdown-item"><i class="fa fa-user text-success mr-2"></i><span class="text-bold"><?= $a_nom??'' ?></span></a>
            <div class="dropdown-divider"></div>
            <a href="v-viewer" class="dropdown-item"><i class="fa fa-home text-info mr-2"></i>Profil</a>
            <div class="dropdown-divider"></div>
            <a href="v-pwd" class="dropdown-item"><i class="fas fa-key text-maroon mr-2"></i>Changer mot de passe</a>
            <div class="dropdown-divider"></div>
            <a href="engine/v-user/logout" class="dropdown-item text-bold"><i class="fas fa-power-off text-danger mr-2"></i> Deconnexion</a>
          </div>
        </li>
        <?php endif ?>
      </ul>
    </div>
</nav>
  <!-- /.navbar -->