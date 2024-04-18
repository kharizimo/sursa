<?php 
$title="Analyse profil";
$rows=[];
if(isset($search)){
    $clause='';
    $i=1;
    if(isset($telephone)){$telephone=trim($telephone);}
    if(isset($groupe_sanguins)){$groupe_sanguins=trim($groupe_sanguins);}

    $clause.=isset($noms)?" and concat(nom,' ',postnom,' ',prenom) like '%$noms%'":'';
    $clause.=isset($telephone)?" and telephone like '%$telephone%'":'';
    $clause.=isset($num_passeport)?" and num_passeport like '%$num_passeport%'":'';
    $clause.=isset($autre_piece)?" and autre_piece like '%$autre_piece%'":'';
    $clause.=isset($groupe_sanguins)?" and groupe_sanguin like '{$groupe_sanguins}_'":'';
    $clause.=isset($sexe)?" and sexe='$sexe'":'';
    
    $sql="select * from v_user where 1=1 $clause";//echo$sql;exit();
    $rows=Db::rows($sql);

    $_SESSION['clause']=$clause;
}
?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header"><div class="card-title"><h3>Analyse</h3></div></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" class="form-control" id="noms">
                        </div>
                        <div class="form-group">
                            <label for="">Genre</label>
                            <select name="sexe" id="sexe" class="form-control">
                                <option value="">Tout</option>
                                <?=Utils::combobox(['array'=>['M','F']])?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Passeport</label>
                            <input type="text" class="form-control" id="num_passeport">
                        </div>
                        <div class="form-group">
                            <label for="">Groupe sanguin</label>
                            <select id="groupe_sanguins" name="groupe_sanguins" class="form-control">
                                <option value="">Tout</option>
                                <?=Utils::combobox(['array'=>['O+','A+','B+','AB+','O-','A-','B-','AB-']])?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Téléphone</label>
                            <input type="text" class="form-control" id="telephone" name="telephone">
                        </div>
                        <div class="form-group">
                            <label for="">Id autre pièce</label>
                            <input type="text" class="form-control" id="autre_piece">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-center"><button class="btn btn-danger" id="search">Lancer la recherche</button></div>
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
                <th>Genre</th>
                <th>Gr. Sang.</th>
                <th>Passeport</th>
                <th>Téléphone</th>
            </thead>
            <tbody>
                <?php if(!$rows):?>
                <tr><td colspan="20" class="text-center">Pas de données</td></tr>
                <?php endif?>
                <?php foreach($rows??[] as $r):?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=$r['nom']?> <?=$r['postnom']?> <?=$r['prenom']?></td>
                    <td><?=$r['sexe']?></td>
                    <td><?=$r['groupe_sanguin']?></td>
                    <td><?=$r['num_passeport']?></td>
                    <td><?=$r['telephone']?></td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div><div class="card-footer text-center"><a href="" target="_blank" id="submit" class="btn btn-danger">Lancer le rapport</a></div></div>
</div></div>