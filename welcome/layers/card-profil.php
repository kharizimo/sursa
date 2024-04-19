<?php 
$data=Db::row("select *,year(now())-year(date_nais) age from vuser where id='".($_SESSION['v-user']??'0')."'");
$data['photo']=$data['photo']??'';
$photo=is_file("img/avatar/{$data['photo']}")?"img/avatar/{$data['photo']}":"img/avatar/0.png";
?>
<input type="hidden" id="h-passeport" value="<?=$data['num_passeport']??''?>">
<input type="hidden" id="h-type-piece" value="<?=$data['type_piece']??''?>">
<input type="hidden" id="h-autre-piece" value="<?=$data['autre_piece']??''?>">
<div class="row">
    <div class="col-md-4 text-center mb-3"><img height="128" src="<?=$photo?>" alt=""></div>
    <div class="col-md-4">
        <dl><dt>Nom complet</dt><dd>&nbsp; <?=$data['nom']??''?> <?=$data['postnom']??''?> <?=$data['prenom']??''?></dd></dl>
        <dl><dt>Sexe / Age</dt><dd>&nbsp; <?=$data['sexe']??''?> / <?=$data['age']??''?> an<?=($data['age']??0)>1?'s':''?></dd></dl>
        <dl><dt>Téléphone</dt><dd>&nbsp; <?=$data['telephone']??''?></dd></dl>
    </div>
    <div class="col-md-4">
        <dl><dt>Nationalité</dt><dd>&nbsp; <?=$data['nationalite']??''?></dd></dl>
        <dl><dt>Passeport</dt><dd>&nbsp; <?=$data['num_passeport']??''?></dd></dl>
        <?php if($data['autre_piece']): ?>
        <dl><dt><?=$data['type_piece']??''?></dt><dd>&nbsp; <?=$data['autre_piece']??''?></dd></dl>
        <?php endif?>
        <dl><dt>Email</dt><dd>&nbsp; <?=$data['email']??''?></dd></dl>
    </div>
</div>