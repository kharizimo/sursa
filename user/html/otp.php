<?php 
$layout='login-layout';
$auth=false;
switch($err){
  case 'fail':
    $err_msg="Code incorrect";break;
  case 'expired':
    $err_msg="Code expiré";break;
  default:
    $err_msg="";
}
?>
<div class="login-box">
  <div class="login-logo">
    <a href="./"><b>Espace</b> VOYAGEUR</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg text-bold">Entrez votre Code OTP activé votre compte</p>
      <p class="text-center text-bold text-danger" id="err"><?=$err_msg?></p>
      <form action="engine/vuser/process-otp" method="post">
        <input type="hidden" id="_s" name="_s" value="<?=$_s??''?>">
        <input type="hidden" id="token" name="token" value="<?=$token??''?>">
        <div class="input-group mb-3">
          <input type="text" class="form-control text-center" name="otp_code" placeholder="code" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-key"></span>
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
      <p class="mb-1"><button id="send-otp" class="btn btn-link">Renvoyer le mail</button></p>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>