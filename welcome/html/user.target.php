<?php 
$title = Lang::translate("Targets");
$sql="select id,noms from user_target";
$rows_link=Db::rows($sql);

$sql="select * from user_target";
$rows_user = Db::rows($sql);

function color($index){
    switch($index):
        case 'active':
            $bg='success';
            break;
        case 'trash':
            $bg='danger';
            break;
        case 'waiting':
            $bg='warning';
            break;
        case 'Activé':
            $bg='success';
            break;
        case 'Annulé':
            $bg='danger';
            break;
        case 'En attente':
            $bg='warning';
            break;
        default:
            $bg='warning';
    endswitch;
    //echo$index;exit();
    return $bg;
}

switch($_s):
    case 'active':
        $clause="etat='Activé'";
        $stitle='Activé';
        break;
    case 'trash':
        $clause="etat='Annulé'";
        $stitle='Annulé';
        break;
    default:
        $clause="etat='En attente'";
        $stitle='En attente';
endswitch;
$sql="select * from v_target where $clause";
$rows_target = Db::rows($sql);

?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="card-title"><h4>Targets : <span class="bg-<?=color($_s)?>"><?=$stitle?></span> </h4></div>
                <div class="card-tools">
                    <a href="?_s=waiting" class="btn btn-warning"><span class="fa fa-hourglass"></span></a>   
                    <a href="?_s=active" class="btn btn-success"><span class="fa fa-lock"></span></a>   
                    <a href="?_s=trash" class="btn btn-danger"><span class="fa fa-trash"></span></a>   
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-sm table-striped data-table">
                        <thead>
                            <tr>
                                <th width="1%"></th>
                                <th>Nom</th>
                                <th>Sexe</th>
                                <th>Téléphone</th>
                                <th>Pièce identité</th>
                                <th>Passeport</th>
                                <th width="1%"></th>
                                <th width="1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rows_target as $item): ?>
                                <tr>
                                    <td>
                                        <button data-id="<?= $item['id'] ?>" data-target="#modal-target-link" data-toggle="modal" class="<?=$item['v_user']?'d-none':''?> btn btn-default btn-sm text-danger"><span class="fa fa-link"></span></button>
                                    </td>
                                    <td><?= $item['noms'] ?></td>
                                    <td><?= $item['sexe'] ?></td>
                                    <td><?= $item['telephone'] ?></td>
                                    <td><?= $item['autre_piece'] ?></td>
                                    <td><?= $item['num_passeport'] ?></td>
                                    <td>
                                        <span class="badge badge-light text-<?= color($item['etat']) ?>"><?= $item['etat'] ?></span>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button data-id="<?=$item['id']?>" data-target="#modal-target-get" data-toggle="modal" class="btn btn-sm btn-default text-info"><span class="fa fa-eye"></span></button>
                                            <a href="engine/target/active?id=<?=$item['id']?>" class="btn btn-sm btn-default text-success"><span class="fa fa-check"></span></a>
                                            <a href="engine/target/abort?id=<?=$item['id']?>" class="btn btn-sm btn-default text-danger"><span class="fa fa-times"></span></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-center"><button data-toggle="modal" data-target="#modal-target-creat" class="btn btn-lg btn-danger"><span class="fa fa-plus"></span></button></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="card-title"><h4>Voyageurs</h4></div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-sm table-striped data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Sexe</th>
                                <th>Téléphone</th>
                                <th>Pièce identité</th>
                                <th>Passeport</th>
                                <th width="1%"></th>
                                <th width="1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rows_user as $item): ?>
                                <tr>
                                    <td><?= $item['id'] ?></td>
                                    <td><?= $item['noms'] ?></td>
                                    <td><?= $item['sexe'] ?></td>
                                    <td><?= $item['telephone'] ?></td>
                                    <td><?= $item['autre_piece'] ?></td>
                                    <td><?= $item['num_passeport'] ?></td>
                                    <td>
                                        <span class="badge badge-light text-<?=color($item['etat'])?>"><?= $item['etat'] ?></span>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button data-id="<?=$item['id']?>" data-target="#modal-target-set" data-toggle="modal" class="btn btn-sm btn-danger"><span class="fa fa-plus"></span></button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-target-get" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <form class="modal-content" action="engine/target/set">
            <input type="hidden" name="id_ref" value="0">
            <input type="hidden" id="type_piece" name="type_piece">
            <div class="modal-header">
                <h5 class="modal-title">Fiche du voyageur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="text-center"><img width="55%" id="photo" src="img/avatar/0.png" alt=""></div>
                        <hr>
                        <dl>
                            <dt>ID</dt>
                            <dd id="id"></dd>
                        </dl>
                        <dl><dt>Demandeur</dt><dd id="demandeur">-</dd></dl>
                    </div>
                    <div class="col-md-4">
                        <dl><dt>Nom</dt><dd id="noms">-</dd></dl>
                        <dl><dt>Sexe</dt><dd id="sexe">-</dd></dl>
                        <dl><dt>Téléphone</dt><dd id="telephone">-</dd></dl>
                        <dl><dt>Passeport</dt><dd id="num_passeport">-</dd></dl>
                        <dl><dt>Autre pièce</dt><dd id="autre_piece">-</dd></dl>
                    </div>
                    <div class="col-md-4">
                        <dl><dt>Nationalité</dt><dd id="nationalite">-</dd></dl>
                        <dl><dt>Date naissance</dt><dd id="date_nais">-</dd></dl>
                        <dl><dt>Poids/Taille</dt><dd id="poids_taille">-</dd></dl>
                        <dl><dt>Groupe sanguin</dt><dd id="groupe_sanguin">-</dd></dl>
                        <dl><dt>Email</dt><dd id="email">-</dd></dl>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><div class="form-group">
                        <label for="">Procedure</label>
                        <textarea class="form-control" name="procedures" id="procedures"></textarea>
                    </div></div>
                    <div class="col"><div class="form-group">
                        <label for="">Raison</label>
                        <textarea class="form-control" name="raison" id="raison"></textarea>
                    </div></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </form>
    </div>
</div>
<div id="modal-target-set" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <form class="modal-content" action="engine/target/set" method="post">
            <input type="hidden" id="v_user" name="v_user" value="0">
            <div class="modal-header">
                <h5 class="modal-title">Fiche du voyageur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="text-center"><img width="55%" id="photo" src="img/avatar/0.png" alt=""></div>
                        <hr>
                        <dl>
                            <dt>ID</dt>
                            <dd><h3 id="id">-</h3></dd>
                        </dl>
                        <hr>
                        <div class="form-group">
                            <label for="">Démandeur</label>
                            <input name="demandeur" id="demandeur" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <dl><dt>Nom</dt><dd id="noms">-</dd></dl>
                        <dl><dt>Sexe</dt><dd id="sexe">-</dd></dl>
                        <dl><dt>Téléphone</dt><dd id="telephone">-</dd></dl>
                        <dl><dt>Passeport</dt><dd id="num_passeport">-</dd></dl>
                        <dl><dt>Autre pièce</dt><dd id="autre_piece">-</dd></dl>
                    </div>
                    <div class="col-md-4">
                        <dl><dt>Nationalité</dt><dd id="nationalite">-</dd></dl>
                        <dl><dt>Date naissance</dt><dd id="date_nais">-</dd></dl>
                        <dl><dt>Poids/Taille</dt><dd id="poids_taille">-</dd></dl>
                        <dl><dt>Groupe sanguin</dt><dd id="groupe_sanguin">-</dd></dl>
                        <dl><dt>Email</dt><dd id="email">-</dd></dl>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><div class="form-group">
                        <label for="">Procedure</label>
                        <textarea class="form-control" name="procedures" id="procedures"></textarea>
                    </div></div>
                    <div class="col"><div class="form-group">
                        <label for="">Raison</label>
                        <textarea class="form-control" name="raison" id="raison"></textarea>
                    </div></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Cibler</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </form>
    </div>
</div>
<div id="modal-target-creat" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <form class="modal-content" action="engine/target/creat">
            <div class="modal-header">
                <h5 class="modal-title">Fiche du voyageur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input name="noms" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Sexe</label>
                            <select name="sexe" id="sexe" class="form-control"><?=Utils::combobox(['array'=>['M','F']])?></select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Téléphone</label>
                            <input name="telephone" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">N° Pièce identité</label>
                            <input name="autre_piece" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Passeport</label>
                            <input name="num_passeport" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Demandeur</label>
                            <input name="demandeur" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><div class="form-group">
                        <label for="">Procedure</label>
                        <textarea class="form-control" name="procedures" id="procedures"></textarea>
                    </div></div>
                    <div class="col"><div class="form-group">
                        <label for="">Raison</label>
                        <textarea class="form-control" name="raison" id="raison"></textarea>
                    </div></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Cibler</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </form>
    </div>
</div>
<div id="modal-target-link" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <form class="modal-content" action="engine/target/link">
            <input type="hidden" name="id" id="id">
            <div class="modal-header">
                <h5 class="modal-title">Liaison information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <dl class="col-md-8"><dt>Nom</dt><dd id="noms">-</dd></dl>
                    <dl class="col-md-4"><dt>Sexe</dt><dd id="sexe">-</dd></dl>
                    <dl class="col-md-4"><dt>Téléphone</dt><dd id="telephone">-</dd></dl>
                    <dl class="col-md-4"><dt>Passeport</dt><dd id="num_passeport">-</dd></dl>
                    <dl class="col-md-4"><dt>Autre pièce</dt><dd id="autre_piece">-</dd></dl>
                </div>
                <div class="row"><div class="col"><table class="table data-table table-hover">
                    <thead><tr>
                        <th width="1%">ID</th>
                        <th>Nom</th>
                        <th width="1%"></th>
                    </tr></thead>
                    <tbody>
                        <?php foreach($rows_link as $r):?>
                        <tr>
                            <td width="1%"><?=$r['id']?></td>
                            <td><?=$r['noms']?></td>
                            <td width="1%"><input type="radio" name="v_user" id="v_user" value="<?=$r['id']?>"></td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table></div></div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Lier</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </form>
    </div>
</div>