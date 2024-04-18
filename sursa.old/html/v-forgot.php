<?php
$token=$token??'';
$id=$id??'0';
?>
<div class="row"><form id="forms" action="engine/v-user/forgot" class="col" method="post">
    <div class="card card-form">
        <?=$_card_header?>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Email<span class="text-danger">*</span></label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Adresse mail">
                    </div>
                </div>
            </div>
            <p class="lead text-center">Saisissez l'adresse e-mail utilisée pour créer votre compte</p>
            <hr>
            <div class="row"><div class="col"><div class="form-group text-center">
                <a href="./" class="btn btn-outline-danger"><span class="fa fa-home"></span> Retour</a>
                <button type="submit" class="btn btn-danger"><span class="fa fa-envelope"></span> Envoyer</button>
            </div></div></div>
        </div>
        <?=$_card_footer?>
    </div>
</form></div>
<?php $title=Lang::translate("Mot de passe oublié")?>
<script>
    validators.rules={
        email:{required:true,email:true},
  }
  validators.messages={
      email:{required:"Adresse mail requis",email:"Adresse mail invalide"},
  }
</script>