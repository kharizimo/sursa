<?php 
$sql="select * from profils_voyageurs_photo";
$rows=Db::rows($sql);
$i=1;
?>
<p>
    <span class="box">Reporting : Profils voyageurs sans photo</span>
</p>
<table class="report-table table-cells-center mask">
    <tr class="thead">
        <td>N°</td>
        <td>Nom</td>
        <td>Nationalité</td>
        <td>Genre</td>
        <td>Groupe sangin</td>
        <td>Taille</td>
        <td>Poids</td>
        <td>Date de Naissance</td>
        <td>N° Passeport</td>
        <td>Email</td>
        <td>Téléphone</td>
    </tr>
    <?php foreach($rows as $item):?>
    <tr>
        <td><?=$i++?></td>
        <td><?=$item['noms']?></td>
        <td><?=$item['nationalite']?></td>
        <td><?=$item['sexe']?></td>
        <td><?=$item['groupe_sanguin']?></td>
        <td><?=$item['taille']?></td>
        <td><?=$item['poids']?></td>
        <td><?=$item['date_nais']?></td>
        <td><?=$item['num_passeport']?></td>
        <td><?=$item['email']?></td>
        <td><?=$item['telephone']?></td>
    </tr>
    <?php endforeach?>
</table>