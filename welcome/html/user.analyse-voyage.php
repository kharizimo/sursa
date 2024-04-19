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
                        <a href="user.analyse" class="btn btn-outline-danger">Voyageurs</a>
                        <a href="user.analyse-voyage" class="btn btn-outline-danger">Voyages</a>
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