<?php 
$opts=Combo::array(['OUI','NON'],['no_data'=>['',"Veuillez completer"]]);
?>
<div class="row"><div class="col"><div class="card">
    <?=$_card_header?>
    <div class="card-body"><form action="" id="form">
        <div class="row">
            <?php require_once 'inc.info.php'?>
            <div class="col">
                <h3>Bilan de santé</h3>
                <div class="form-group">
                    <label for="">Avez-vous de la fièvre ?</label>
                    <select name="fievre" id="fievre" class="form-control"><?=$opts?></select>
                </div>
                <div class="form-group">
                    <label for="">Avez-vous de la grippe ?</label>
                    <select name="grippe" id="grippe" class="form-control"><?=$opts?></select>
                </div>
                <div class="form-group">
                    <label for="">Toussez-vous ?</label>
                    <select name="toux" id="toux" class="form-control"><?=$opts?></select>
                </div>
                <div class="form-group">
                    <label for="">Avez-vous des difficultés respiratoires ?</label>
                    <select name="difficultes_respiratoires" id="difficultes_respiratoires" class="form-control"><?=$opts?></select>
                </div>
                <div class="form-group">
                    <label for="">Avez-vous une assurance santé ?</label>
                    <select name="assurance_sante" id="assurance_sante" class="form-control"><?=$opts?></select>
                </div>
                <div class="form-group">
                    <label for="">
                        Autres symptomes
                        <small class="position-absolute pt-1" style="right:0">
                            <label for="check">Preciser</label> &nbsp;&nbsp;
                            <input type="checkbox" id="check">
                        </small>
                    </label>
                    <input type="text" id="autres_symptomes" name="autres_symptomes" class="form-control">
                </div><br>
                <h3>Personne à contacter en cas d'urgence</h3>
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom_contact" id="nom_contact" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Téléphone</label>
                    <input type="text" name="telephone_contact" id="telephone_contact" class="form-control">
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center mt-3"><button class="btn btn-danger btn-lg">Continuer</button></div>
    </form></div>
    <?=$_card_footer?>
</div></div></div>