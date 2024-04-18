<?php
$sql="select * from profils_voyageurs_photo where id=$id";
$row_profil=Db::row($sql);
$clause = isset($province_dest) ? " and province_dest='$province_dest'" : '';
$clause = isset($voie_transport) ? " and voie_transport='$voie_transport'" : '';
$clause = isset($lib_poste) ? " and lib_poste='$lib_poste'" : '';
$sql = "select * from mouvement_voyageurs where id=$id";
$rows_mvt = Db::rows($sql);
$i = 1;
?>
<style>
    .report-table *,
    .box {font-size: smaller}
    .box {margin-bottom: 100px}
</style>
<table class="table">
    <tr>
        <td width="80%">
            <div style="width:100%">
                <span class="box">Reporting : Profils voyageurs avec photo</span>
                <span class="box box-border">Prov. dest. : Tous</span>
                <span class="box box-border">Moyen de trans. : Tous</span><br><br><br>
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
                <tr>
                    <td><?= $row_profil['noms'] ?></td>
                    <td><?= $row_profil['nationalite'] ?></td>
                    <td><?= $row_profil['sexe'] ?></td>
                    <td><?= $row_profil['groupe_sanguin'] ?></td>
                    <td><?= $row_profil['taille'] ?></td>
                    <td><?= $row_profil['poids'] ?></td>
                    <td><?= $row_profil['date_nais'] ?></td>
                    <td><?= $row_profil['num_passeport'] ?></td>
                    <td><?= $row_profil['email'] ?></td>
                    <td><?= $row_profil['telephone'] ?></td>
                </tr>
            </table>
        </td><td width="2%">&nbsp;</td>
        <td valign="bottom"><img width="100%" src="img/avatar/<?= $row_profil['photo'] ?>" alt=""></td>
    </tr>
</table><br>
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
        <td>Adresse</td>
        <td>N°Vol, Bus, Bar ou autres</td>
        <td>Siège</td>
    </tr>
    <?php foreach ($rows_mvt as $item): ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $item['date_voyage'] ?></td>
            <td><?= $item['noms'] ?></td>
            <td><?= $item['mvt'] ?></td>
            <td><?= $item['pays'] ?></td>
            <td><?= $item['province'] ?></td>
            <td><?= $item['province_dest'] ?></td>
            <td><?= $item['ville'] ?></td>
            <td><?= $item['lib_poste'] ?></td>
            <td><?= $item['nom_contact'] ?></td>
            <td><?= $item['telephone_contact'] ?></td>
            <td><?= $item['compagnie'] ?></td>
            <td><?= $item['adresse'] ?></td>
            <td><?= $item['n_transport'] ?></td>
            <td><?= $item['n_siege'] ?></td>
        </tr>
    <?php endforeach ?>
</table>