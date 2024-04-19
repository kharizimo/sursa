<?php 

$clause=isset($province_dest)?" and province_dest='$province_dest'":'';
$clause=isset($voie_transport)?" and voie_transport='$voie_transport'":'';
$clause=isset($lib_poste)?" and lib_poste='$lib_poste'":'';
$sql="select * from mouvement_voyageurs";
$rows=Db::rows($sql);
$i=1;
?>
<style>
    .report-table *,.box{font-size:smaller}
    .box{margin-bottom:100px}
</style>
<div style="width:100%">
    <span class="box">Reporting : Profils voyageurs avec photo</span>
    <span class="box box-border">Province destination : Tous</span>
    <span class="box box-border">Moyen de transport : Tous</span><br><br><br>
    <span class="box box-border">Poste frontalier : Tous</span>
    <span class="box box-border">Mouvement : Tous</span>
    <span class="box box-border">Date : Tous</span><br><br><br>
    <span class="box box-border">Pays : Tous</span>
    <span class="box box-border">Compagnie : Tous</span>
    <span class="box box-border">Province : Tous</span>
    <span class="box box-border">N° Vol,Bus ou autres : Tous</span><br><br><br>
</div>
<table class="report-table table-cells-center mask">
    <tr class="thead">
        <td>N°</td>
        <td>Date </td>
        <td>Noms</td>
        <td>Mvt</td>
        <td>Pays</td>
        <td>Province</td>
        <td>Province dest.</td>
        <td>Ville</td>
        <td>Frontière</td>
        <td>Nom pers.contacte</td>
        <td>Tel pers.contacte</td>
        <td>Compagnie</td>
        <td>N°Vol, Bus, Bar ou autres</td>
        <td>Siège</td>
        <td width="80">Photo</td>
    </tr>
    <?php foreach($rows as $item):?>
    <tr>
        <td><?=$i++?></td>
        <td><?=$item['date_voyage']?></td>
        <td><?=$item['noms']?></td>
        <td><?=$item['mvt']?></td>
        <td><?=$item['pays']?></td>
        <td><?=$item['province']?></td>
        <td><?=$item['province_dest']?></td>
        <td><?=$item['ville']?></td>
        <td><?=$item['lib_poste']?></td>
        <td><?=$item['nom_contact']?></td>
        <td><?=$item['telephone_contact']?></td>
        <td><?=$item['compagnie']?></td>
        <td><?=$item['n_transport']?></td>
        <td><?=$item['n_siege']?></td>
        <td><img src="img/avatar/<?=$item['photo']?>" width="100%" alt=""></td>
    </tr>
    <?php endforeach?>
</table>