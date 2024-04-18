<?php 
$_title="Poste";
?>
<div class="row"><div class="col"><div class="card">
    <div class="card-header"><div class="card-tools"><button data-id="" data-toggle="modal" data-target="#modal" class="btn btn-primary">Ajouter</button></div></div>
    <div class="card-body"><table class="table datatable">
        <thead><tr>
            <th>Libellé</th>
            <th>Province</th>
            <th>Po</th>
            <th>Flux</th>
            <th width="1%"></th>
            <th width="1%"></th>
        </tr></thead>
        <tbody></tbody>
    </table></div>
</div></div></div>
<script>
    dataTableOptions.ajax={
        url:'engine/poste/table',
        dataSrc:function(e){
            let ret=e.map(function(v){
                let edit=`<button data-toggle="modal" data-target="#modal" data-id="${v.id}" class="btn btn-success btn-sm btn-edit">Modifier</button>`
                let del=`<button onclick="fn_del(${v.id})" class="btn btn-danger btn-sm btn-edit">Suprimer</button>`
                return [v.lib,v.province,v.po,v.flux,edit,del]
            })
            return ret
        }
    }
</script>