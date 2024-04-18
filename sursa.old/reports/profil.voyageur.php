<?php 
$pos='portrait';
$sql="select * from profil_voyageur where id=$id";
$row=Db::row($sql);
$photo=is_file("img/avatar/{$row['photo']}")?"img/avatar/{$row['photo']}":"img/avatar/0.png";
$archives=Db::rows("select photo from archive where not photo is null and v_user=$id order by id desc")
?>
<table class="table"><tr>
    <td valign="top">
        <p><span class="box">Reporting : Profil voyageur</span></p>
        <table class="table mask">
            <tr><td width="30%">Nom </td><td>: <?=$row['nom']?></td></tr>
            <tr><td>Postnom</td><td>: <?=$row['postnom']?></td></tr>
            <tr><td>Prenom</td><td>: <?=$row['prenom']?></td></tr>
            <tr><td>Nationalité</td><td>: <?=$row['nationalite']?></td></tr>
            <tr><td>Genre</td><td>: <?=$row['sexe']?></td></tr>
            <tr><td>Groupe sanguin</td><td>: <?=$row['groupe_sanguin']?></td></tr>
            <tr><td>Taille</td><td>: <?=$row['taille']?></td></tr>
            <tr><td>Poids</td><td>: <?=$row['poids']?></td></tr>
            <tr><td>Date de naissance</td><td>: <?=$row['date_nais']?></td></tr>
            <tr><td>N° Passeport</td><td>: <?=$row['num_passeport']?></td></tr>
            <tr><td>Autre pièce</td><td>: <?=$row['autre_piece']?></td></tr>
            <tr><td>Type pièce</td><td>: <?=$row['type_piece']?></td></tr>
            <tr><td>Email</td><td>: <?=$row['email']?></td></tr>
            <tr><td>Téléphone</td><td>: <?=$row['telephone']?></td></tr>
        </table>
    </td>
    <td width="16%" class="sidebar" valign="top">
        <p class="photo"><img src="<?=$photo?>" alt="" width="100%"></p>
        <?php 
        for($i=0;$i<2;$i++): if(isset($archives[$i]['photo']) && is_file("img/avatar/{$archives[$i]['photo']}")):?>
        <p class="photo"><img src="<?="img/avatar/{$archives[$i]['photo']}"?>" alt="" width="100%"></p>
        <?php endif; endfor?>
    </td>
</tr></table>
<h2 class="center invisible">Plus de trois modifications de la photo de profil</h2>