<?php 
$rows=Db::rows("select * from user");
$btn=<<<EOT
<div class="btn-group">
    <button data-id="%id%" data-toggle="modal" data-target="#modal-user" class="btn-sm btn btn-default"><span class="fa fa-search text-success"></span></button>
    <button data-id="%id%" data-toggle="modal" data-target="#modal-del" class="btn-sm btn btn-default"><span class="fa fa-times text-danger"></span></button>
</div>
EOT;
?>
<div class="row"><div class="col"><div class="card"><div class="card-header"><div class="card-title"><button data-toggle="modal" data-id="0" data-target="#modal-user" class="btn btn-primary">Ajouter</button></div></div><div class="card-body"><table class="table table-striped">
    <thead><tr>
        <th>Nom</th>
        <th>Pseudo</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Profil</th>
        <th>Etat</th>
        <th width="1%"></th>
    </tr></thead>
    <tbody>
        <?php 
        foreach($rows as $r):
        ?>
        <tr>
            <td><?=$r['nom']??''?></td>
            <td><?=$r['pseudo']??''?></td>
            <td><?=$r['email']??''?></td>
            <td><?=$r['telephone']??''?></td>
            <td><?=$r['profil']??''?></td>
            <td><?=$r['etat']??''?></td>
            <td><?=str_replace('%id%',$r['id'],$btn)?></td>
        </tr>
        <?php endforeach?>
    </tbody>
</table></div></div></div></div>