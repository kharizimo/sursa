<?php $title=Lang::translate("Administrateurs")?>
<div class="row"><div class="col">
    <div class="card">
        <?=$_card_header?>
        <div class="card-body">
            <div class="text-right"><a href="admins-form" class="btn btn-danger">Ajouter</a></div>
            <hr>
           <table id="table" class="table table-sm table-striped">
            <thead><tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Etablissement</th>
                <th>Etat</th>
                <th width="1%"></th>
            </tr></thead>
            <tbody>
                <?php foreach(Db::rows("select user.*,ets.lib lib_ets from user join ets on user.id_ets=ets.id and profil='admin'") as $item):?>
                <tr>
                    <td><a class="text-bold" href="admins-form?id=<?=$item['id']?>"><?=$item['nom']?></a></td>
                    <td><?=$item['email']?></td>
                    <td><?=$item['telephone']?></td>
                    <td><?=$item['lib_ets']?></td>
                    <td><?=$item['etat']?></td>
                    <td><a href="engine/user/delete?id=<?=$item['id']?>" class="btn btn-sm btn-default text-danger"><span class="fa fa-times"></span></a href="engine/user/del?"></td>
                </tr>
                <?php endforeach?>
            </tbody>
           </table>
        </div>
        <?=$_card_footer?>
    </div>
</div></div>