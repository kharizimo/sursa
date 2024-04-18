<div class="row"><form action="engine/voyage/insert" method="post" class="col">
    <div class="card">
        <?=$_card_header?>
        <div class="card-body text-center">
            <span class="fa fa-exclamation-triangle text-danger fa-5x mb-3"></span>

            <h4 class="text-center text-bold text-danger">Système de surveillance sanitaire des voyageurs Entrant, Sortant et Circulant sur le sol Congolais</h4>
            <p class="lead text-center">
                Fournir ces informations à un agent frontalier est obligatoire dans le cadre de la riposte sanitaire du virus Covid-19 et autres futures maladies. Ne pas fournir ou fournir des informations éronées peuvent entrainer un refus d'entrer au sol Congolais ou une amende allant jusqu'à <b>1.000.000 CDF</b>. 
            </p>
            <div class="row">
            </div>
            <hr>
            <div class="row"><div class="col">
                <div class="form-group text-center"><label for="check">Les informations fournies ci-haut sont exactes et sincères</label> &nbsp;<input type="checkbox" id="check" name="check" onclick="$('#submit').prop('disabled',!$(this).is(':checked'))"></div>
                <div class="form-group text-center"><input type="submit" value="Confirmer" id="submit" class="btn btn-lg btn-outline-danger " disabled></div>
            </div></div>
        </div>
        <?=$_card_footer?>
    </div>
</form></div>
<?php $title=Lang::translate("Finaliser la demande")?>