<?php 
$list_type_doc=[
    'Passeport',
    'Carte d\'Identité Nationale',
    'Permis de conduire',
];
$cbo_type_doc=Utils::combobox(['array'=>$list_type_doc,'no_data'=>'Préciser le type de document pour ce voyage'])
?>
<div class="row">
    <div class="col-md-4 form-group">
        <label for="">Date de voyage<span class="text-danger">*</span></label>
        <select name="jour_voyage" id="jour_voyage" class="form-control">
            <?=Utils::combobox(['count'=>[1,31],'zero'=>2,'no_data'=>'Jour'])?>
        </select>
    </div>
    <div class="col-md-4 form-group">
        <label for="">&nbsp;</label>
        <select name="mois_voyage" id="mois_voyage" class="form-control">
            <option value="-1" disabled selected>Mois</option>
            <option value="1">Janvier</option><option value="2">Février</option><option value="3">Mars</option><option value="4">Avril</option><option value="5">Mai</option><option value="6">Juin</option><option value="7">Juillet</option><option value="8">Aout</option><option value="9">Septembre</option><option value="10">Octobre</option><option value="11">Novembre</option><option value="12">Décembre</option>        </select>
    </div>
    <div class="col-md-4 form-group">
        <label for="">&nbsp;</label>
        <select name="annee_voyage" id="annee_voyage" class="form-control">
            <?=Utils::combobox(['count'=>[2024,2025],'no_data'=>'Année'])?>
        </select>
    </div>
</div>
<hr>
<div class="row">
    <div class="form-group col-md-3">
        <label for=""><?=Lang::translate("Moyen de Transport")?> <span class="text-danger">*</span></label>
        <select name="voie_transport" id="voie_transport" class="form-control" onchange="">
            <option value="-1" disabled selected><?=Lang::translate("Séléctionnez")?></option>
            <option value="Voie aérienne"><?=Lang::translate('Voie Aérienne')?></option>
            <option value="Voie terrestre"><?=Lang::translate('Voie Terrestre')?></option>
            <option value="Voie maritime"><?=Lang::translate('Voie Maritime')?></option>
        </select>
    </div>
    <div class="form-group col-md-3">
        <label for=""><?=Lang::translate("Compagnies")?> <span class="text-danger">*</span></label>
        <input type="hidden" name="compagnie" id="compagnie" data-target="">
        <select class="d-none comp form-control" onchange="$('#compagnie').val($(this).val())">
            <option value="-1" disabled selected><?=Lang::translate("Séléctionnez")?></option>
            <?=Utils::combobox(['array'=>$aeroports]) ?>
        </select>
        <input type="text" onchange="$('#compagnie').val($(this).val())" placeholder="<?=Lang::translate("Compagnies")?>" class="form-control comp">
    </div>
    <div class="form-group col-md-3">
        <label for=""><?=Lang::translate("N° Vol, Bus, Bateau ou autres")?> <span class="text-danger">*</span></label>
        <input name="n_transport" id="n_transport" type="text" class="form-control text-upper" placeholder="<?=Lang::translate("N°/ IDENTIFIANT")?>">
    </div>
    <div class="form-group col-md-3">
        <label for=""><?=Lang::translate("N° Siège")?> <span class="text-danger">*</span></label>
        <input name="n_siege" id="n_siege" type="text" class="form-control text-upper" placeholder="<?=Lang::translate("N° Siège")?>">
    </div>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        <label for=""><?=Lang::translate("Type de document")?></label>
        <select name="type_doc_voyage" id="type_doc_voyage" class="form-control"><?=$cbo_type_doc?></select>
    </div>
    <div class="col-md-6 form-group">
        <label for=""><?=Lang::translate("N° du document pour ce voyage")?></label>
        <input type="text" name="num_doc_voyage" id="num_doc_voyage" class="form-control" placeholder="<?=Lang::translate("N° du document pour ce voyage")?>">
    </div>  
</div>
