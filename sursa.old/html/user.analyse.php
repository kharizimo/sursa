<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header"><div class="card-title"><h3>Analyse</h3></div></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Date début</label>
                            <input class="form-control" type="date" name="date_debut" id="date_debut">
                        </div>
                        <div class="form-group">
                            <label for="">Date début</label>
                            <input class="form-control" type="date" name="date_fin" id="date_fin">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Mouvement</label>
                            <select name="" id="" class="form-control"><?=Utils::combobox(['array'=>['Tout','Entrant','Sortant','Circulant']])?></select>
                        </div>
                        <div class="form-group">
                            <label for="">Moyen de transport</label>
                            <select name="" id="" class="form-control"><?=Utils::combobox(['array'=>['Tout','Aerien','Maritime','Terrestre']])?></select>
                        </div>
                        <div class="form-group">
                            <label for="">Compagnie</label>
                            <select name="" id="" class="form-control"></select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-center"><button class="btn btn-danger">Lancer le rapport</button></div>
            </div>
        </div>
    </div>
</div>