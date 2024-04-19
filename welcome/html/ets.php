<?php $title=Lang::translate("Etablissements")?>
<div class="row"><div class="col">
    <div class="card card-form">
        <?=$_card_header?>
        <div class="card-body">
            <div class="text-right"><a href="ets-form" class="btn btn-danger">Ajouter</a></div>
            <hr>
           <table id="table" class="table table-sm table-striped">
            <thead><tr>
                <th>Libellé</th>
                <th class="text-center">Utilisateurs</th>
                <th width="1%"></th>
            </tr></thead>
            <tbody>
                <?php foreach(Db::rows("select *,(select count(*) from user where ets.id=user.id_ets) c from ets") as $item): ?>
                <tr>
                    <td><a class="text-bold" href="ets-form?id=<?=$item['id']?>"><?=$item['lib']?></a></td>
                    <td class="text-center"><?=$item['c']?></td>
                    <td><a href="engine/ets/delete?id=<?=$item['id']?>" class="btn btn-sm btn-default text-danger"><span class="fa fa-times"></span></a></td>
                </tr>
                <?php endforeach?>
            </tbody>
           </table>
        </div>
        <?=$_card_footer?>
    </div>
</div></div>