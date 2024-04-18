<?php
$combo=Db::rows("select id,concat(nom,' ',postnom,' ',prenom) lib from vuser");
$combo=array_map(function($t){
    $id=sprintf("%05d",$t['id']);
    return ['id'=>$t['id'],'lib'=>"$id {$t['lib']}"];
},$combo);
$start_combo='<option value="">Ajouter un cas non ciblé</option>';
?>
<div class="row"><div class="col"><div class="card"><div class="card-body">
    <form id="form" action="" method="post">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="">Id</label>
                    <select name="id_vuser" id="id_vuser" class="form-control"><?=$start_combo.Combo::data($combo)?></select>
                </div>
                <div class="form-group">
                    <label for="">Nom</label>
                    <input name="nom" id="nom" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Téléphone</label>
                    <input name="telephone" id="telephone" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input name="email" id="email" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Date de naissance</label>
                    <input name="date_nais" id="date_nais" type="text" class="form-control">
                </div>
                <table class="table-sm table-borderless datatable" data-searching="false" data-paging="false" data-info="false" data-ajax="engine/target/ident-table">
                    <thead><tr>
                        <th>Pièce d'identité</th>
                        <th>Numéro</th>
                        <th width="1%"></th>
                    </tr></thead>
                    <tbody></tbody>
                    <tfoot><tr>
                        <th><select name="ident_lib" id="ident-lib" class="form-control form-control-sm"><?=Combo::array(Db::gets("select lib data from identite_lib"))?></select></th>
                        <th><input type="text" name="ident_numero" id="ident-numero" class="form-control form-control-sm"></th>
                        <th><button id="ident-insert" type="button"  class="btn-block btn btn-primary btn-sm">Ajouter</button></th>
                    </tr></tfoot>
                </table>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Motif</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Procédure</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="text-right"><input type="submit" value="Soumettre" class="btn btn-primary"></div>
    </form>
</div></div></div></div>