<?php 
$pos='portrait';
$sql="select * from profil_dernier_mvt where id=$id and mvt='$mvt' limit 1";
$row=Db::row($sql);
$photo=is_file("img/avatar/{$row['photo']}")?"img/avatar/{$row['photo']}":"img/avatar/0.png";
$archives=Db::rows("select photo from archive where not photo is null and v_user=$id order by id desc")
?>
<table class="table"><tr>
    <td valign="top">
        <p>
            <span class="box">Reporting : Profil dernier mouvement</span>
            <span class="box box-border">Mouvement : Sortant</span>
        </p>
        <table class="table mask">
            <tr><td width="30%">Nom </td><td>: <?=$row['nom']?></td></tr>
            <tr><td>Postnom</td><td>: <?=$row['postnom']?></td></tr>
            <tr><td>Prenom</td><td>: <?=$row['prenom']?></td></tr>
            <tr><td>Nationalité</td><td>: <?=$row['nationalite']?></td></tr>
            <tr><td>Date de naissance</td><td>: <?=$row['date_nais']?></td></tr>
            <tr><td>N° Passeport</td><td>: <?=$row['num_passeport']?></td></tr>
            <tr><td>Genre</td><td>: <?=$row['sexe']?></td></tr>
            <tr><td>Date Dernier mvt</td><td>: <?=$row['mvt']?></td></tr>
            <tr><td>Province/Ville prov.</td><td>: <?=$row['province']?>/<?=$row['ville']?></td></tr>
            <tr><td>Province/Ville prov.</td><td>: <?=$row['province_dest']?>/<?=$row['ville_dest']?></td></tr>
            <tr><td>Pays destination</td><td>: <?=$row['pays']?></td></tr>
            <tr><td>Frontière sortie</td><td>: <?=$row['lib_poste']?></td></tr>
            <tr><td>Nom pers. contact.</td><td>: <?=$row['nom_contact']?></td></tr>
            <tr><td>Tél. pers. contact.</td><td>: <?=$row['telephone_contact']?></td></tr>
            <tr><td>Transport/Companie</td><td>: <?=$row['voie_transport']?>/<?=$row['compagnie']?></td></tr>
            <tr><td>N° Transport</td><td>: <?=$row['voie_transport']?></td></tr>
            <tr><td>N° Siège</td><td>: <?=$row['n_siege']?></td></tr>
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