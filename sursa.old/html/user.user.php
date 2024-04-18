<?php $title = Lang::translate("Administrateurs");
$search=$search??'';
$clause=$search?"concat(nom,' ',postnom,' ',prenom) like '%$search%' ".
"or sexe='$search' or date_nais='$search' or telephone='$search' ".
"or num_passeport='$search' or email='$search'" 
:'1=1';
$rows=Db::rows("select * from v_user where $clause")
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
                        <a href="user.target-Voyageur" class="btn btn-outline-danger">Super Admin</a>
                        <a href="user.target-Voyageur" class="btn btn-outline-danger">Admin</a>
                        <a href="user.target-Voyageur" class="btn btn-outline-danger">User</a>
                        <a href="#" data-target="#modal" data-toggle="modal" class="btn btn-danger">Ajouter</a>

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
                                    <td><a data-target="#modal-strat" data-toggle="modal" href="#"
                                            class="btn btn-sm btn-default text-danger"><span class="fa fa-cog"></span></a></td>
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
                <button class="btn btn-primary form-control">Charger</button>
                <hr>
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
        <button type="button" class="btn btn-primary">Modifier</button>
        <button type="button" class="btn btn-primary">Cibler</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<div id="modal-strat" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Strategies d'accès</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-4 form-check">
                <input type="checkbox" class="form-check-input">
                <label for="" class="form-check-label">Data 1</label>
            </div>
            <div class="col-md-4 form-check">
                <input type="checkbox" class="form-check-input">
                <label for="" class="form-check-label">Data 1</label>
            </div>
            <div class="col-md-4 form-check">
                <input type="checkbox" class="form-check-input">
                <label for="" class="form-check-label">Data 1</label>
            </div>
            <div class="col-md-4 form-check">
                <input type="checkbox" class="form-check-input">
                <label for="" class="form-check-label">Data 1</label>
            </div>
            <div class="col-md-4 form-check">
                <input type="checkbox" class="form-check-input">
                <label for="" class="form-check-label">Data 1</label>
            </div>
            <div class="col-md-4 form-check">
                <input type="checkbox" class="form-check-input">
                <label for="" class="form-check-label">Data 1</label>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Ok</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>