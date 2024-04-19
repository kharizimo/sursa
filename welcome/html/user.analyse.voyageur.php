<?php 
$title="Analyse mouvement";
$report_url='#';
$rows=[];
if(isset($search)){
    $i=1;
    $sql="select * from mouvement_voyageurs where 1=1";
    $rows=Db::rows($sql);
}
$v_user=Db::rows("select id,concat(nom,' ',postnom,' ',prenom) lib from v_user");

?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header"><div class="card-title"><h3>Analyse</h3></div></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Mouvement</label>
                            <select name="mvt" id="mvt" class="form-control"><option value="">Tous</option></select>
                        </div>
                        <div class="form-group">
                            <label for="">Moyen de transport</label>
                            <select name="voie_transport" id="voie_transport" class="form-control"><option value="">Tous</option></select>
                        </div>
                        <div class="form-group">
                            <label for="">Pays</label>
                            <select name="pays" id="pays" class="form-control"><option value="">Tous</option></select>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Province</label>
                            <select name="province" id="province" class="form-control"><option value="">Tous</option></select>
                        </div>
                        <div class="form-group">
                            <label for="">Prov. dest.</label>
                            <select name="province_dest" id="province_dest" class="form-control"><option value="">Tous</option></select>
                        </div>
                        <div class="form-group">
                            <label for="">poste frontalier</label>
                            <select name="id_poste" id="id_poste" class="form-control"><option value="">Tous</option></select>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Date debut</label>
                            <input type="date" name="date_debut" id="date_debut" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Date fin</label>
                            <input type="date" name="date_fin" id="date_fin" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">N°Vol,Bus,Bat. ou autre</label>
                            <select name="n_transport" id="n_transport" class="form-control"><option value="">Tous</option></select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md form-group">
                        <label for="">Noms</label>
                        <select name="noms" id="noms" class="form-control select2">
                            <option value="" selected disabled>Selectionner le nom</option>
                            <?=Utils::combobox(['data'=>$v_user])?>
                        </select>
                    </div>
                    <div class="col-md form-group">
                        <label for="">Passeport</label>
                        <input type="text" id="num_passeport" name="num_passeport" class="form-control">
                    </div>
                    <div class="col-md form-group">
                        <label for="">Téléphone</label>
                        <input type="text" id="telephone" name="telephone" class="form-control">
                    </div>
                    <div class="col-md-2 form-group">
                        <label for="">&nbsp;</label>
                        <input type="button" value="Lancer" class="form-control btn btn-info">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-center"><button id="search" class="btn btn-danger">Lancer la recherche</button></div>
            </div>
        </div>
    </div>
</div>

<div class="row"><div class="col">
    <div class="card"><div class="card-body p-0">
        <table class="table">
            <thead>
                <th>N°</th>
                <th>Nom</th>
                <th>Mouvement</th>
                <th>Compagnie</th>
                <th>Pays</th>
                <th>Provenance</th>
                <th>Destination</th>
                <th>Date</th>
            </thead>
            <tbody>
                <?php if(!$rows): ?>
                <tr><td colspan="20" class="text-center">Pas de données</td></tr>
                <?php endif?>
                <?php foreach($rows as $r):?>
                <thead>
                    <td><?=$i++?></td>
                    <td><?=$r['noms']?></td>
                    <td><?=$r['mvt']?></td>
                    <td><?=$r['compagnie']?></td>
                    <td><?=$r['pays']?></td>
                    <td><?=$r['province']?></td>
                    <td><?=$r['province_dest']?></td>
                    <td><?=$r['date_voyage']?></td>
                </thead>
                <?php endforeach?>
            </tbody>
        </table>
    </div><div class="card-footer text-center"><button id="report" class="btn btn-danger">Lancer le rapport</button></div></div>
</div></div>