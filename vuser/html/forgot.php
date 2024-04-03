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
      <p class="login-box-msg text-bold">Entrez votre adresse mail pour réinitialiser votre mot de passe</p>

      <form action="assets/index3.html" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="offset-6 col-6">
            <button type="submit" class="btn btn-primary btn-block">Soumettre</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->
      <hr>
      <p class="mb-1"><a href="login">Connexion</a></p>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>