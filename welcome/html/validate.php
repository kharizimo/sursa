<?php
$token=$token??'';
$id=$id??'0';
?>
<div class="row"><form id="forms" action="engine/<?=$obj?>/validate" class="col" method="post">
    <input type="hidden" name="email" value="<?=$email?>">
    <input type="hidden" name="obj" value="<?=$obj?>">

    <div class="card card-form">
        <?=$_card_header?>
        <div class="card-body">
            <?php if(isset($err)): ?>
            <div class="row"><div class="col text-center"><b class="text-danger">Code incorrect</b></div></div>
            <?php endif?>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Code<span class="text-danger">*</span></label>
                        <input type="text" id="code" name="code" class="form-control" placeholder="Code de validation">
                    </div>
                </div>
            </div>
            <p class="lead text-center">Merci de saisir le code envoyé à votre adresse e-mail</p>
            <hr>
            <div class="row"><div class="col"><div class="form-group text-center">
                <a href="engine/<?=$obj??'user'?>/forgot?email=<?=$email??''?>" class="btn btn-outline-danger"><span class="fa fa-home"></span> Renvoyer le mail</a>
                <button type="submit" class="btn btn-danger"><span class="fa fa-envelope"></span> Envoyer</button>
            </div></div></div>
        </div>
        <?=$_card_footer?>
    </div>
</form></div>
<?php $title=Lang::translate("Code")?>
<script>
    validators.rules={
        email:{required:true,email:true},
  }
  validators.messages={
      email:{required:"Adresse mail requis",email:"Adresse mail invalide"},
  }
</script>