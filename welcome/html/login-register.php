<div class="row"><div class="col">
    <div class="card">
        <?=$_card_header?>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-center text-danger">
                    <h4>C'est ma première fois</h4>
                    <h1 class="fa fa-user d-block my-4"></h1>
                    <a href="v-register?mvt=<?=$mvt??''?>" class="btn btn-outline-danger">Inscription</a>
                </div>
                <div class="col-md-6 text-center text-secondary">
                    <h4>Déjà inscrit (e) </h4>
                    <h1 class="fa fa-user d-block my-4"></h1>
                    <a href="v-login?mvt=<?=$mvt??''?>" class="btn btn-outline-secondary">Connexion</a>
                </div>
            </div>
        </div>
        <?=$_card_footer?>
    </div>
</div></div>
<?php $title=Lang::translate("Se connecter")?>