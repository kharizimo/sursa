<div class="modal fade" id="modal-del">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Suppression</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p class="text-center">Voulez-vous supprimer cet éléments ?</p>
        </div>
        <div class="modal-footer justify-content-between">
            <div class="text-right">
                <a href="" data-id="" id="btn-del" class="btn btn-primary">Supprimer</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-user">
  <div class="modal-dialog modal-lg">
    <form method="post" action="engine/user/insert" class="modal-content">
      <input type="hidden" name="id" id="id" value="0">
      <div class="modal-header">
        <h4 class="modal-title">Utilisateur</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Nom</label>
              <input type="text" class="form-control" name="nom" id="nom">
            </div>
            <div class="form-group">
              <label for="">Pseudo</label>
              <input type="text" class="form-control" name="pseudo" id="pseudo">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="">Téléphone</label>
              <input type="text" class="form-control" id="telephone" name="telephone">
            </div>
            <div class="form-group">
              <label for="">Profil</label>
              <select name="profil" id="profil" class="form-control">
                <?=Combo::array(['User','Admin','Master'])?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Etat</label>
              <select name="etat" id="etat" class="form-control">
                <?=Combo::object([1=>'Actif',0=>'Bloqué'])?>
              </select>
            </div>
            <div class="form-group">
              <label for="">Adresse</label>
              <textarea name="adresse" id="adresse" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="">Info</label>
              <textarea name="info" id="info" class="form-control"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="text-right">
          <button type="submit" id="btn-del" class="btn btn-primary">Soumettre</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        </div>
      </div>
    </form>
  </div>
</div>