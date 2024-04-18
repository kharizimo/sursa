<div class="row"><div class="col"><div class="card"><div class="card-body">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Téléphone</label>
                    <input type="tel" name="telephone" id="telephone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Etablissement</label>
                    <select name="id_ets" id="id_ets" class="form-control"><?=Combo::data(Db::rows("select * from ets"))?></select>
                </div>
                <div class="form-group">
                    <label for="">Poste</label>
                    <select name="id_poste" id="id_poste" class="form-control select2"><?=Combo::data(Db::rows("select * from poste"))?></select>
                </div>
                <div class="form-group">
                    <label for="">Etat</label>
                    <select name="id_poste" id="id_poste" class="form-control"><?=Combo::array(['User','Admin','Master'])?></select>
                </div>
            </div>
            <div class="col"><table class="table datatable table-sm" data-searching="false" data-info="false" data-paging="false">
                <thead><tr>
                    <th>Strategie</th>
                    <th>Valeur</th>
                    <th><input type="checkbox" name="" id=""></th>
                </tr></thead>
            </table></div>
        </div>
        <hr>
        <div class="text-right"><input type="submit" value="Soumettre" class="btn btn-primary"></div>
    </form>
</div></div></div></div>