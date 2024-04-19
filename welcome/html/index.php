<?php 
$_card_title="";
$_card_warning="";
$title='Accueil';

?>
<div class="row"><div class="col">
<div class="p-2 text-bold mb-2 rounded text-white" style="background:rgba(0,0,0,.5)"><marquee behavior="" direction=""><?php foreach($_news as $item){echo $item.'&nbsp; &star;&star;&star; &nbsp;';} ?></marquee></div>
    <div class="card" id="form">
        <?=$_card_header?>
        <div class="card-body">
            <div class="row">
                <div class="col-md mb-5 text-center">
                    <label for=""><?=Lang::translate('Voyageur Entrant')?></label>
                    <a href="engine/common/mvt?mvt=entrant" class="btn-type-voyage btn btn-danger d-block w-100 p-4"><span class="fa fa-plane-arrival" style="font-size:40px"></span></a>
                </div>
                <div class="col-md mb-5 text-center">
                    <label for=""><?=Lang::translate('Voyageur Sortant')?></label>
                    <a href="engine/common/mvt?mvt=sortant" class="btn-type-voyage btn btn-danger d-block w-100 p-4"><span class="fa fa-plane-departure" style="font-size:40px"></span></a>
                </div>
                <div class="col-md mb-5 text-center">
                    <label for=""><?=Lang::translate('Voyageur Circulant')?></label>
                    <a href="engine/common/mvt?mvt=circulant" class="btn-type-voyage btn btn-danger d-block w-100 p-4"><span class="fa fa-sync" style="font-size:40px"></span></a>
                </div>
            </div>
            <div class="row"><p class="col text-center h4 text-bold text-black"><?=Lang::translate("Système de surveillance sanitaire des voyageurs entrant, sortant et circulant sur le sol Congolais")?></p></div>
            <div class="row"><div class="col-md-6 text-center m-auto " >
                <div class="danger mt-3" style="margin:auto;padding:5px; border-radius:10px;color:red; background:rgba(255,255,255,.5); font-size:40px">
                    <span class="mx-3 text-danger fa fa-plane"></span>
                    <span class="mx-3 text-danger fa fa-car-side"></span>
                    <span class="mx-3 text-danger fa fa-bus"></span>
                    <span class="mx-3 text-danger fa fa-ship"></span>
                </div>
            </div></div>
        </div>
        <?=$_card_footer?>
    </div>
</div></div>