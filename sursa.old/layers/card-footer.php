<div class="card-footer">
    <div class="row">
        <?php if(isset($_SESSION['user'])):?>
            <div class="col"><a href="engine/user/logout" class="text-danger" title="Deconnexion"><span class="fa fa-power-off fa-2x"></span> <h3 class="d-inline"><?=Db::get("select nom data from user where id={$_SESSION['user']}")?></h3></a></div>
        <?php else:?>
            <div class="col"><a href="login" class="text-danger" title="Espace administrateur"><span class="far fa-user fa-2x"></span></a></div>
        <?php endif?>
        <div class="col text-right"><img src="img/logo-sursa.png" style="border-radius:10px; width:70px" alt=""></div>
    </div>
</div>