<?php $title=Lang::translate("Contact")?>
<div class="row"><form id="forms" action="engine/common/contact" method="post" class="col card-form">
    <div class="card">
        <?=$_card_header?>
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="">Noms <span class="text-danger">*</span></label>
                    <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom">
                </div>
                <div class="form-group col-md-12">
                    <label for="">E-mail <span class="text-danger">*</span></label>
                    <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group col-md-12">
                    <label for="">sujet <span class="text-danger"></span></label>
                    <input type="text" id="sujet" name="sujet" class="form-control" placeholder="Sujet">
                </div>
                <div class="form-group col-md-12">
                    <label for="">Message <span class="text-danger"></span></label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <hr>
                <div class="col-12 form-group text-center"><input type="submit" value="Envoyer" class="m-auto btn-lg btn btn-outline-danger"></div>
            </div>
        </div>
        <?=$_card_footer?>
    </div>
</form action="engine/common/contact" method="post"></div>
<script>
    validators.rules={
        email:{required:true,email:true},
        nom:{required:true}
    }
    validators.messages={
        email:{required:"Adresse mail requis",email:"Adresse mail invalide"},
        nom:{required:"Nom requis"},
    }
</script>
