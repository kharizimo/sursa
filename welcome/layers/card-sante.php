<?php 
$title_adresse=[
    'entrant'=>"Indiquez l'adresse où vous allez sejourner en RDC",
    'sortant'=>"Indiquez l'adresse où vous avez sejourné en RDC",
    'circulant'=>"Indiquez l'adresse où vous allez sejourner"
];
?>
<div class="row">
    <div class="form-group col">
        <label for="">La personne à contacter en cas d'urgence <span class="text-danger">*</span></label>
        <div class="row">
            <div class="col-md-6"><input name="nom_contact" id="nom_contact" type="text" class="form-control" placeholder="Nom complet"></div>
            <div class="form-group col-md-6 __b">
            <input style="" type="tel" id="telephone_contact" name="telephone_contact" class="iti-tel form-control" placeholder="Téléphone">
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="form-group col-md-6">
        <label for="">Avez-vous de la fièvre ou une sensation de fièvre ?<span class="text-danger">*</span></label>
        <select name="fievre" id="fievre" class="form-control">
            <option value="-1" disabled selected>Choisissez</option>
            <option value="1">OUI</option>
            <option value="0">NON</option>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="">Avez-vous un syndrôme grippal (Grippe) ? <span class="text-danger">*</span></label>
        <select name="sensation_fievre" id="sensation_fievre" class="form-control">
            <option value="-1" disabled selected>Choisissez</option>
            <option value="1">OUI</option>
            <option value="0">NON</option>
        </select>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label for="">Toussez-vous ? <span class="text-danger">*</span></label>
        <select name="toux" id="toux" class="form-control">
            <option value="-1" disabled selected>Choisissez</option>
            <option value="1">OUI</option>
            <option value="0">NON</option>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="">Avez-vous des difficultés respiratoires ? <span class="text-danger">*</span></label>
        <select name="difficultes_respiratoires" id="difficultes_respiratoires" class="form-control">
            <option value="-1" disabled selected>Choisissez</option>
            <option value="1">OUI</option>
            <option value="0">NON</option>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Avez-vous une assurance maladie ? <span class="text-danger">*</span></label>
            <select name="assurance_maladie" id="assurance_maladie" class="form-control">
                <option value="-1" disabled selected>Choisissez</option>
                <option value="1">OUI</option>
                <option value="0">NON</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Adresse complète <span class="text-danger">*</span></label>
            <input name="adresse" id="adresse" type="text" class="form-control" placeholder="<?=$title_adresse[$_c]?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Avez-vous d'autres symptômes ou plaintes ? <small>Sinon cochez R.A.S ici</small> 
            <input type="checkbox" onclick="$('#autres_symptomes').val(this.checked?'R.A.S':'');$('#autres_symptomes').prop('disabled',this.checked); " name="ras" id="ras"></label>
            <textarea name="autres_symptomes" id="autres_symptomes" cols="30" style="height:125px" class="form-control"></textarea>
        </div>
    </div>
</div>
<script>
  
  validators.rules={
        jour_voyage:{required:true},
        mois_voyage:{required:true},
        annee_voyage:{required:true}
  }
  validators.messages={
      jour_voyage:{required:"Veuillez-remplir l'information manquante"},
      mois_voyage:{required:"Veuillez-remplir l'information manquante"},
      annee_voyage:{required:"Veuillez-remplir l'information manquante"}
  }
</script>