<?php $title=Lang::translate("Postes")?>
<div class="row"><div class="col">
    <div class="card">
        <?=$_card_header?>
        <div class="card-body">
            <div class="text-right"><a href="poste-form" class="btn btn-danger">Ajouter</a></div>
            <hr>
           <table id="table" class="table table-sm table-striped">
            <thead><tr>
                <th>Libellé</th>
                <th>Province</th>
                <th>Po</th>
                <th>Flux</th>
                <th width="1%"></th>
            </tr></thead>
            <tbody>
                <?php foreach(Db::rows("select * from poste") as $item):?>
                <tr>
                    <td><a href="poste-form?id=<?=$item['id']?>"><?=$item['lib']?></a></td>
                    <td><?=$item['province']?></td>
                    <td><?=$item['po']?></td>
                    <td><?=$item['flux']?></td>
                    <td><a href="engine/poste/delete?id=<?=$item['id']?>" class="btn btn-sm btn-default text-danger"><span class="fa fa-times"></span></button></td>
                </tr>
                <?php endforeach?>
            </tbody>
           </table>
        </div>
        <?=$_card_footer?>
    </div>
</div></div>