<?php 
$title=Lang::translate("Entrant");
if(!isset($_SESSION['vuser-id'])){
    header('location:./');
    exit();
}
?>
<div class="row"><form id="forms" method="post" action="engine/voyage/tmp-insert" class="col">
    <input type="hidden" name="id_v_user" value="<?=$_SESSION['vuser-id']?>">
    <input type="hidden" name="mvt" value="entrant">
    <input type="hidden" name="lang" value="<?=Lang::$lang?>">
    <input type="hidden" name="ville_destination" id="ville_destination">
    <div class="card">
        <?=$_card_header?>
        <div class="card-body">
            <?=$_card_profil?><hr>
            <?=$_card_voyage?><hr>
            <div class="row">
                <div class="col-md-3">
                    <label for="">Pays de provenance</label>
                    <select name="pays_visite" id="pays_visite" class="form-control">
                        <option value="-1" disabled selected>Séléctionnez</option>
                        <?=Utils::combobox(['array'=>$countries[Lang::$lang]])?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="">Province destination</label>
                    <select name="province_destination" id="province_destination" class="form-control">
                        <option value="-1" disabled selected>Séléctionnez</option>
                        <?=Utils::combobox(['array'=>$provinces])?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="">Ville de destination</label>
                    <select class="form-control ville_option">
                        <option value="-1" disabled selected>Séléctionnez</option>
                        <option value="0">Autre ville</option>
                    </select>
                </div>
            
                <div class="col-md-3 form-group">
                    <label for="">Préciser la ville</label>
                    <input type="text" class="form-control ville_option text-upper" disabled>
                </div>
            </div>
            <hr>
            <?=$_card_sante?><hr>
            <div class="row"><div class="col"><div class="form-group text-center"><input type="submit" value="Soumettre" class="btn-lg btn btn-outline-danger"></div></div></div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col text-right"><img src="img/logo-sursa.png" style="border-radius:10px; width:70px" alt=""></div>
            </div>
        </div>
    </div>
</form></div>