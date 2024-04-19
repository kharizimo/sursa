<?php $title = Lang::translate("Administrateurs");
$search=$search??'';
if(isset($_SESSION['analyse_mvt'])){
    $clause=$_SESSION['analyse_mvt']?
    "mvt='{$_SESSION['analyse_mvt']}'"
    :"";
}
if(isset($_SESSION['analyse_chrono'])){
    switch($_SESSION['analyse_chrono']){
        case 'today':
            $chrono="date(v.date_creat)=date(now())";break;
        case 'mois':
            $chrono="month(v.date_creat)=month(now())";break;
        default:
            $chrono='';
    }
    $clause.=($clause&&$chrono)?' and ':'';
}

if(isset($search)){
    $clause="concat(nom,' ',postnom,' ',prenom) like '%$search%' ".
    "or sexe='$search' or date_nais='$search' or telephone='$search' ".
    "or num_passeport='$search' or email='$search'" ;
}

$clause=$clause?$clause:'1=1';
$field="u.id,nom,postnom,prenom,email,telephone,sexe,num_passeport,v.date_creat,mvt";
$sql="select $field from voyage v join v_user u on u.id=v.id_v_user where $clause";
$rows=Db::rows($sql);
// echo$sql;exit();

function check_analyse_mvt($index){
    return ($_SESSION['analyse_mvt']??'')==$index?
        '<span class="fa fa-check float-right"></span>'
    :'';
}
function check_analyse_chrono($index){
    return ($_SESSION['analyse_chrono']??'')==$index?
        '<span class="fa fa-check float-right"></span>'
    :'';
}
?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <form action=""><input name="search" style="background-color:rgba(255,255,255,.7)" placeholder="Recherche"
                            type="text" class="form-control" value="<?=$search?>"></form>
                </div>
                <div class="card-tools">
                    <div class="btn-group">
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Aujourd'hui
                                </button>
                                <div class="dropdown-menu">
                                    <a href="javascript:set_analyse_chrono('')" class="dropdown-item">Tout <?=check_analyse_chrono('')?></a>
                                    <a href="javascript:set_analyse_chrono('today')" class="dropdown-item">Aujourd'hui <?=check_analyse_chrono('today')?></a>
                                    <a href="javascript:set_analyse_chrono('hier')" class="dropdown-item">Hier <?=check_analyse_chrono('hier')?></a>
                                    <a href="javascript:set_analyse_chrono('mois')" class="dropdown-item">Ce mois <?=check_analyse_chrono('mois')?></a>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tout
                                </button>
                                <div class="dropdown-menu">
                                    <a href="javascript:set_analyse_mvt('')" class="dropdown-item">Tout <?=check_analyse_mvt('')?></span></a>
                                    <a href="javascript:set_analyse_mvt('entrant')" class="dropdown-item">Entrant <?=check_analyse_mvt('entrant')?></a>
                                    <a href="javascript:set_analyse_mvt('sortant')" class="dropdown-item">Sortant <?=check_analyse_mvt('sortant')?></a>
                                    <a href="javascript:set_analyse_mvt('circulant')" class="dropdown-item">Circulant <?=check_analyse_mvt('circulant')?></a>
                                </div>
                            </div>
                        </div>
                        <a href="#" data-target="#modal-search" data-toggle="modal" class="btn btn-danger">Recherche</a>

                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Sexe</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Passeport</th>
                                <th width="1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rows as $item): ?>
                                <tr>
                                    <td><a class="text-bold" href="#" data-target="#modal" data-toggle="modal">
                                            <?= $item['nom'] ?> <?= $item['postnom'] ?> <?= $item['prenom'] ?>
                                        </a></td>
                                    <td>
                                        <?= $item['sexe'] ?>
                                    </td>
                                    <td>
                                        <?= $item['email'] ?>
                                    </td>
                                    <td>
                                        <?= $item['telephone'] ?>
                                    </td>
                                    <td>
                                        <?= $item['num_passeport'] ?>
                                    </td>
                                    <td><a href="engine/target/set-id?id=<?= $item['id'] ?>"
                                            class="btn btn-sm btn-default text-danger"><span class="fa fa-lock"></span></a></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Fiche du voyageur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col">
                <div class="text-center"><img src="img/avatar/0.png" alt=""></div>                
                <hr>
            </div>
        </div>
        <div class="row">
            <dl class="col-md-4">
                <dt>Titre</dt>
                <dd>Valeur du voyageur</dd>
            </dl>
            <dl class="col-md-4">
                <dt>Titre</dt>
                <dd>Valeur du voyageur</dd>
            </dl>
            <dl class="col-md-4">
                <dt>Titre</dt>
                <dd>Valeur du voyageur</dd>
            </dl>
            <dl class="col-md-4">
                <dt>Titre</dt>
                <dd>Valeur du voyageur</dd>
            </dl>
            <dl class="col-md-4">
                <dt>Titre</dt>
                <dd>Valeur du voyageur</dd>
            </dl>
            <dl class="col-md-4">
                <dt>Titre</dt>
                <dd>Valeur du voyageur</dd>
            </dl>
            <dl class="col-md-4">
                <dt>Titre</dt>
                <dd>Valeur du voyageur</dd>
            </dl>
        </div>
      </div>
      <div class="modal-footer">
        <b>2024-01-12 13:12:00</b>
      </div>
    </div>
  </div>
</div>

<div id="modal-search" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Fiche du voyageur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Autres informations </label>
                    <textarea name="" id="" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Postnom</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Prénom</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Sexe</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Date naissance</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Nationalité</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Passeport</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Id Autre pièce</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Téléphone</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Poser ciblage</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>