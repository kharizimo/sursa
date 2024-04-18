<?php 
$search=$search??'';
$id_ets=$id_ets??Db::get('select id data from ets limit 1');
$case_etat="case etat when 'Actif' then 'text-success' when 'Bloqué' then 'text-danger' when 'En attente' then 'text-warning' else 'text-info' end";
$rows=Db::rows("select u.*, p.lib lib_poste,$case_etat case_etat from user u left join poste p on p.id=u.id_poste where nom like '%$search%' and id_ets=$id_ets");
$template_btn='<a href="user.single?id=%u" class="btn btn-sm btn-danger"><span class="fa fa-eye"></span></a>';
$template_etat='<span class="fa fa-circle %s"></span>';
?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="card-title"><form id="form" action="">
                    <input type="hidden" name="id_ets" id="id_ets" value="<?=$id_ets?>">
                    <input class="form-control" type="search" name="search" id="search" value="<?=$search??''?>">
                </form></div>
                <div class="card-tools">
                    <select name="cbo_ets" id="cbo_ets" class="form-control">
                        <?=Utils::combobox(['data'=>Db::rows('select * from ets'),'default'=>$id_ets])?>
                    </select>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table">
                    <thead><tr>
                        <th width="1%"></th>
                        <th>Nom</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                        <th>Poste</th>
                        <th>Profil</th>
                        <th width="1%"></th>
                    </tr></thead>
                    <tbody>
                        <?php foreach($rows as $r):?>
                        <tr>
                            <td><?=str_replace('%s',$r['case_etat'],$template_etat)?></td>
                            <td><?=$r['nom']?></td>
                            <td><?=$r['telephone']?></td>
                            <td><?=$r['email']?></td>
                            <td><?=$r['lib_poste']?></td>
                            <td><?=$r['profil']?></td>
                            <td><?=str_replace('%u',$r['id'],$template_btn)?></td>
                        </tr>
                        <?php endforeach;if(!$rows):?>
                        <tr><td colspan="6" class="text-center">Pas de données</td></tr>
                        <?php endif?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>