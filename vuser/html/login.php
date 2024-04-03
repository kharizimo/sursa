<?php 
$layout='login-layout';
$auth=false;
?>
<div class="login-box">
  <div class="login-logo">
    <a href="./"><b>Espace</b> VOYAGEUR</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg text-bold">Entrez vos coordonnées de connexion</p>
      <?=isset($err)?'<p class="text-center text-bold text-danger">Echec de connexion</p>':''?>

      <form action="engine/vuser/login" method="post">
        <div class="input-group mb-3">
          <input type="text" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="pwd" class="form-control" placeholder="Mot de passe">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">Session ouverte</label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Connexion</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->
      <hr>
      <p class="mb-1"><a href="forgot">Mot de passe oublié</a></p>
      <p class="mb-0"><a href="register" class="text-center">Inscription</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>