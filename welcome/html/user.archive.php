<?php 
$title=Lang::translate("Gestion archive");
$clause=isset($v_user)?($v_user?" and v_user=$v_user":''):'';
$_s=isset($_s)?($_s?$_s:'field'):'field';

if($_s=='photo'){
    $rows_cbo=Db::rows("select distinct v_user,lib from v_archive_photo");
    $rows=Db::rows("select * from v_archive_photo where 1=1 $clause");
}
else{
    $rows_cbo=Db::rows("select distinct v_user,lib from v_archive_field");
    $rows=Db::rows("select * from v_archive_field where 1=1 $clause");
}
?>
<div class="row"><div class="col">
    <div class="card">
        <div class="card-header">
            <div class="card-title"><form action=""><input type="hidden" name="_s">
                <select data-s="<?=$_s??'field'?>" onchange="loads()" style="min-width:250px" name="v_user" id="v_user" class="form-control form-control-sm select2"><option value="">Tous les nouvelles infos</option><?=Utils::combobox(['data'=>$rows_cbo])?></select>
            </form></div>
            <div class="card-tools">
                <div class="btn-group">
                    <a href="javascript:ch_s('field')" class="btn btn-sm btn<?=$_s=='field'?'':'-outline'?>-danger ">Champs</a>
                    <a href="javascript:ch_s('photo')" class="btn btn-sm btn<?=$_s=='photo'?'':'-outline'?>-danger ">Photo</a>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table id="table" class="table table-sm table-striped">
                 <thead><tr>
                     <th>ID</th>
                     <th>Nom</th>
                     <th>Date</th>
                     <th width="1%"></th>
                 </tr></thead>
                 <tbody>
                     <?php foreach($rows as $item):?>
                     <tr>
                         <td><?=$item['v_user']?></td>
                         <td><?=$item['lib']?></td>
                         <td><?=$item['date_creat']?></td>
                         <td><button data-target="#modal-archive-<?=$_s?>" data-toggle="modal" class="btn btn-sm btn-danger" data-id="<?=$item['id']?>"><span class="fa fa-eye"></span></button></td>
                     </tr>
                     <?php endforeach?>
                     <?php if(!$rows):?>
                     <tr><td colspan="6" class="text-center">Aucune donnée</td></tr>
                     <?php endif?>
                 </tbody>
                </table>
            </div>
        </div>
    </div>
</div></div>
<script>
    
</script>
