<?php $title=Lang::translate("Administrateurs")?>
<div class="row"><div class="col">
    <div class="card">
        <div class="card-header">
            <div class="card-title"><form action=""><input style="background-color:rgba(255,255,255,.7)" placeholder="Recherche" type="text" class="form-control"></form></div>
            <div class="card-tools">
                    <div class="btn-group">
                        <a href="user.target-Voyageur" class="btn btn-outline-danger">Entrant</a>
                        <a href="user.target-Voyageur" class="btn btn-outline-danger">Sortant</a>
                        <a href="user.target-Voyageur" class="btn btn-outline-danger">Circulant</a>
                        <a href="user.target-Voyageur" class="btn btn-outline-danger">Tout</a>

                    </div>
                </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="table" class="table table-sm table-striped">
                 <thead><tr>
                     <th>Nom</th>
                     <th>Date</th>
                     <th>Champs d'édition</th>
                     <th>Image</th>
                 </tr></thead>
                 <tbody>
                     <?php foreach(Db::rows("select user.*,ets.lib lib_ets from user join ets on user.id_ets=ets.id and profil='admin'") as $item):?>
                     <tr>
                         <td><a data-toggle="modal" data-target="#modal" class="text-bold" href="#"><?=$item['nom']?></a></td>
                         <td><?=$item['email']?></td>
                         <td><?=$item['telephone']?></td>
                         <td><?=$item['lib_ets']?></td>
                     </tr>
                     <?php endforeach?>
                 </tbody>
                </table>
            </div>
        </div>
    </div>
</div></div>
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