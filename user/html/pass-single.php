<div class="row">
    <div class="col">
        <div class="card"><div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h1>Nom (Pseudo)</h1>
                    <h4 class="text-muted">Profil</h4>
                    <hr>
                    <img src="img/avatar/0.jpg" style="max-width:200px" id="avatar" class="m-auto d-block" alt="">
                    <hr>
                    <div class="row text-center">
                        <div class="col-md-4"><label class="text-danger" for="">Entrant</label><button data-value="entrant" class="btn-mvt btn-block btn btn-danger py-3"><span class="fa-3x fa fa-plane-arrival"></span></button></div>
                        <div class="col-md-4"><label class="text-secondary" for="">Sortant</label><button data-value="sortant" class="btn-mvt btn-block btn btn-outline-danger py-3"><span class="fa-3x fa fa-plane-departure"></span></button></div>
                        <div class="col-md-4"><label class="text-secondary" for="">Circulant</label><button data-value="circulant" class="btn-mvt btn-block btn btn-outline-danger py-3"><span class="fa-3x fa fa-sync"></span></button></div>
                    </div>
                    <hr>
                    <div class="row">
                        <dl class="col-md">
                            <dt>Nom complet</dt>
                            <dd>768678786</dd>
                        </dl>
                    </div>
                    <div class="row">
                        <dl class="col-md-6">
                            <dt>Date de naissance</dt>
                            <dd>768678786</dd>
                        </dl>
                        <dl class="col-md-6">
                            <dt>Age</dt>
                            <dd>768678786</dd>
                        </dl>
                    </div>
                    <div class="row">
                        <dl class="col-md-6">
                            <dt>Nationalité</dt>
                            <dd>768678786</dd>
                        </dl>
                        <dl class="col-md-6">
                            <dt>Téléphone</dt>
                            <dd>768678786</dd>
                        </dl>
                    </div>
                    <div class="row">
                        <dl class="col-md-6">
                            <dt>Groupe sqnguin</dt>
                            <dd>768678786</dd>
                        </dl>
                        <dl class="col-md-6">
                            <dt>Poids</dt>
                            <dd>768678786</dd>
                        </dl>
                    </div>
                    <div class="row">
                        <dl class="col-md-6">
                            <dt>numéro passeport</dt>
                            <dd>768678786</dd>
                        </dl>
                        <dl class="col-md-6">
                            <dt>Identié</dt>
                            <dd>768678786</dd>
                        </dl>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Date de voyage</label>
                            <div class="row">
                                <div class="col-md-4 mb-2"><select name="" id="" class="form-control"></select></div>
                                <div class="col-md-4 mb-2"><select name="" id="" class="form-control"></select></div>
                                <div class="col-md-4 mb-2"><select name="" id="" class="form-control"></select></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Moyen de transport</label>
                            <select name="" id="" class="form-control"></select>
                        </div>
                        <div class="form-group position-relative">
                            <label for="">
                                Compagnie
                                <small class="position-absolute pt-1" style="right:0">
                                    <label for="check_compagnie">Preciser</label> &nbsp;&nbsp;
                                    <input type="checkbox" name="check_compagnie" id="check_compagnie">
                                </small>
                            </label>
                            <select name="cbo_compagnie" id="cbo_compagnie" class="form-control"></select>
                            <input name="txt_compagnie" id="txt_compagnie" type="text" class="form-control d-none">
                        </div>
                        <div class="row">
                            <div class="col-md-6"><div class="form-group">
                                <label for="">Vol, bus, bateau</label>
                                <input type="text" class="form-control">
                            </div></div>
                            <div class="col-md-6"><div class="form-group">
                                <label for="">Siège</label>
                                <input type="text" class="form-control">
                            </div></div>
                        </div> 
                        <div class="form-group div-mvt div-entrant">
                            <label for="">Pays de provenance</label>
                            <select name="" id="" class="form-control"></select>
                        </div>
                        <div class="form-group div-mvt div-sortant div-circulant d-none">
                            <label for="">Province actuelle</label>
                            <select name="" id="" class="form-control"></select>
                        </div>
                        <div class="form-group position-relative div-mvt div-sortant div-circulant d-none">
                            <label for="">
                                Ville actuelle 
                                <small class="position-absolute pt-1" style="right:0">
                                    <label for="check_ville_origin">Preciser</label> &nbsp;&nbsp;
                                    <input type="checkbox" name="check_ville_origin" id="check_ville_origin">
                                </small>
                            </label>
                            <select name="cbo_ville_origin" id="cbo_ville_origin" class="form-control"></select>
                            <input name="txt_ville_origin" id="txt_ville_origin" type="text" class="form-control d-none">
                        </div>
                        <div class="form-group div-mvt div-sortant d-none">
                            <label for="">Pays de destination</label>
                            <select name="" id="" class="form-control"></select>
                        </div>
                        <div class="form-group  div-mvt div-entrant div-circulant">
                            <label for="">Province de destination</label>
                            <select name="" id="" class="form-control"></select>
                        </div>
                        <div class="form-group position-relative div-mvt div-entrant div-circulant">
                            <label for="">
                                Ville de destination 
                                <small class="position-absolute pt-1" style="right:0">
                                    <label for="check_ville_dest">Preciser</label> &nbsp;&nbsp;
                                    <input type="checkbox" name="check_ville_dest" id="check_ville_dest">
                                </small>
                            </label>
                            <select name="cbo_ville_dest" id="cbo_ville_dest" class="form-control"></select>
                            <input name="txt_ville_dest" id="txt_ville_dest" type="text" class="form-control d-none">
                        </div>
                        <hr>
                        <div class="form-group">
                            <input type="checkbox" name="" id="">
                            <label for="">Avez-vous de la fièvre ?</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="" id="">
                            <label for="">Avez-vous un syndrôme grippal (Grippe) ?</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="" id="">
                            <label for="">Toussez-vous ?</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="" id="">
                            <label for="">Avez-vous des difficultés respiratoires ?</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="" id="">
                            <label for="">Avez-vous une assurance maladie ?</label>
                        </div>
                        <div class="form-group position-relative">
                            <label for="">
                                Autres symptomes ou plaintes
                                <small class="position-absolute pt-1" style="right:0">
                                    <label for="check_plainte">Rien à signaler</label> &nbsp;&nbsp;
                                    <input type="checkbox" name="check_plainte" id="check_plainte">
                                </small>
                            </label>
                            <textarea name="plainte" id="plainte" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Adresse complète</label>
                            <input type="text" class="form-control">
                        </div>                    
                        <div class="form-group text-right"><input class="btn btn-primary" type="submit" value="Soumettre"></div>
                    </form>
                </div>
            </div>
        </div></div>
    </div>
</div>