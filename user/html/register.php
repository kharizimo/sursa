<?php 
$layout='login-layout';
$auth=false;
?>
<div class="login-box" style="padding-top:150px; padding-bottom:50px">
  <div class="login-logo">
    <a href="./"><b>Espace</b> VOYAGEUR</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg text-bold">Renseignez vos coordonnées</p>
      <?=isset($err)?'<p class="text-center text-bold text-danger">Echec de connexion</p>':''?>

      <form action="engine/vuser/register" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
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
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="confirm" class="form-control" placeholder="Confirmation">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="nom" class="form-control" placeholder="Nom">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-id-card"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="postnom" class="form-control" placeholder="Postnom">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-id-card"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="prenom" class="form-control" placeholder="Prénom">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-id-card"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select name="sexe" id="sexe" class="form-control">
            <?=Combo::object(['M'=>'Masculin','F'=>'Féminin'],['no-data'=>['','Genre']])?>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-venus-mars"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select name="nationalite" id="nationalite" class="form-control">
            <?=Combo::array(Vars::$pays_fr)?>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map-marked"></span>
            </div>
          </div>
        </div>
        <div class="form-group input-group">
          <input type="text" class="form-control iti-tel-input" placeholder="Telephone">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
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
      <p class="mb-0"><a href="login" class="text-center">Connexion</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>