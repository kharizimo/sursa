<?php 
$layout='login-layout';
?>
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="#"><b>ESPACE</b> bloqué</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name"><?=$_user['nom']?></div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="assets/dist/img/user1-128x128.jpg" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" action="engine/vuser/unlock" method="post">
      <div class="input-group">
        <input type="password" name="pwd" class="form-control" placeholder="Mot de passe">

        <div class="input-group-append">
          <button type="submit" class="btn">
            <i class="fas fa-arrow-right text-muted"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Entrez votre mot de passe pour debloquer
  </div>
  <div class="text-center">
    <a href="login">Se connecter par un autre compte</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2024 <b><a href="<?=$_app['vendor_website']?>" class="text-black"><?=$_app['vendor_name']?></a></b><br>
    Tout droit reservé
  </div>
</div>