<?php 
if($id){
    $data=Db::row("select * from poste where id=$id");
}
?>
<div class="row"><form method="post" action="engine/poste/<?=$id?'update':'insert'?>" class="col">
    <input type="hidden" name="id" value="<?=$id?>">
    <div class="card card-form">
        <?=$_card_header?>
        <div class="card-body">
            <div class="row">
                <div class="col m-auto">
                    <div class="form-group">
                        <label for="">Libellé<span class="text-danger"></span></label>
                        <input type="text" id="lib" name="lib" value="<?=$data['lib']??''?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Province<span class="text-danger"></span></label>
                        <select class="form-control" name="province" id="province"><?=Utils::combobox(['array'=>$provinces,'default'=>$data['province']])?></select>
                    </div>
                    <div class="form-group">
                        <label for="">Po<span class="text-danger"></span></label>
                        <input type="text" id="po" name="po" value="<?=$data['po']??''?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Flux<span class="text-danger"></span></label>
                        <input type="text" id="flux" name="flux" value="<?=$data['flux']??''?>" class="form-control">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row"><div class="col"><div class="form-group text-center"><input type="submit" value="Soumettre" class="btn btn-outline-danger"></div></div></div>
        </div>
        <?=$_card_footer?>
    </div>
</form></div>
<?php $title=Lang::translate("Poste")?>