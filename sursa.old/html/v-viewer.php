<?php $title=Lang::translate("Profil voyageur");
$groupes_sanguin=['O+','O-','A+','A-','B+','B-','AB+','AB-','Je ne sais pas'];
$id=$_SESSION['v-user']??'0';
$sql="select * from v_user where id=$id";
extract(Db::row($sql));
$photo=is_file("img/avatar/$photo")?"img/avatar/$photo":"img/avatar/0.png";
list($annee_nais,$mois_nais,$jour_nais)=explode('-',$date_nais);//print_r(Db::row($sql));
for($i=20;$i<=250;$i++)
  $taille_[$i]=$i;
for($i=20;$i<=450;$i++)
  $poids_[$i]=$i;
for($i=1;$i<=31;$i++)
  $jour_[$i]=$i;
for($i=2018;$i>1900;$i--)
  $annee_[$i]=$i;
?>
<div class="row"><form method="post" enctype="multipart/form-data" action="engine/v-user/update" class="col">
    <input type="hidden" name="mvt" value="<?=$mvt??''?>">
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="hidden" name="email" value="<?=$data['email']??''?>">
    <div class="card">
        <?=$_card_header?>
        <div class="card-body">
            <div class="row mb-2"><div class="col text-center">
              <input type="file"  id="photo" name="photo" class="d-none" onchange="loadFile(event)">
              <input type="hidden" id="loaded" name="loaded" value="0">
              <img id="avatar" height="200" src="<?=$photo?>" alt="">
            </div></div>
            <div class="row"><div class="col text-center">
              <button type="button" onclick="document.getElementById('photo').click();" class="btn btn-outline-danger btn-sm">Charger la photo</button>
              <button type="button" onclick="
              document.getElementById('avatar').src='img/avatar/0.png';
              document.getElementById('loaded').value=0;"
              class="btn btn-danger btn-sm">Supprimer la photo</button>
            </div></div>
            <div class="row mt-2"><div class="col text-center"><button data-toggle="modal" data-target="#modal" id="camera" type="button" class="btn btn-secondary btn-sm" style="width:250px"><span class="fa fa-camera"></span> Réglementation des photos</button></div></div>
            <hr>
            <div class="row">
              <div class="form-group col-md-6">
                  <label for="">Nom <span class="text-danger">*</span></label>
                  <input style="text-transform:uppercase" type="text" id="nom" name="nom" value="<?=$nom?>" class="form-control" placeholder="Nom">
              </div>
              <div class="form-group col-md-6">
                  <label for="">Prénom <span class="text-danger">*</span></label>
                  <input style="text-transform:capitalize" type="text" id="prenom" name="prenom" value="<?=$prenom?>" class="form-control" placeholder="Prénom">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                  <label for="">Postnom <span class="text-danger"></span></label>
                  <input style="text-transform:uppercase" type="text" id="postnom" name="postnom" value="<?=$postnom?>" class="form-control" placeholder="Postnom">
              </div>
              <div class="col-md-6 form-group">
                    <label for="">Nationalité</label>
                    <select name="nationalite" id="nationalite" class="form-control">
                        <option value="-1" disabled selected>Séléctionnez</option>
                        <?=Utils::combobox(['array'=>$countries[Lang::$lang],'default'=>$nationalite])?>
                    </select>
                </div>
            </div>
            <hr>
            <div class="row">
              <div class="form-group col-md-3">
                <label for="">Genre <span class="text-danger">*</span></label>
                <select name="sexe" id="sexe" class="form-control">
                    <option value="-1" disabled selected>Séléctionnez</option>
                    <?=Utils::combobox(['list'=>['M'=>'Masculin','F'=>'Féminin'],'default'=>$sexe])?>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="">Groupe sanguin <span class="text-danger">*</span></label>
                <select name="groupe_sanguin" id="groupe_sanguin" class="form-control">
                    <option value="-1" disabled selected>Séléctionnez</option>
                    <?=Utils::combobox(['array'=>$groupes_sanguin,'default'=>$groupe_sanguin])?>
                </select>
              </div>
              <div class="col-md-3 form-group">
                <label for="">Taille (Cm) <span class="text-danger">*</span></label>
                <select name="taille" id="taille" class="form-control">
                  <option selected disabled>Selectionnez</option>
                  <?=Utils::combobox(['array'=>$taille_,'default'=>$taille]) ?>
                </select>
              </div>
              <div class="col-md-3 form-group">
                <label for="">Poids (Kg) <span class="text-danger">*</span></label>
                <select name="poids" id="poids" class="form-control">
                <?=Utils::combobox(['array'=>$poids_,'default'=>$poids]) ?>
                </select>
              </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group">
                  <label for="">Date de naissance</label>
                  <select name="jour_nais" id="jour_nais" class="form-control">
                    <option value="-1" disabled selected>Jour</option>
                    <?=Utils::combobox(['count'=>[1,31],'zero'=>2,'default'=>$jour_nais]) ?>
                  </select>
                </div>
                <div class="col-md-4 form-group">
                  <label for="">&nbsp;</label>
                  <select name="mois_nais" id="mois_nais" class="form-control">
                      <option value="-1" disabled selected>Mois</option>
                      <?=Utils::combobox(['list'=>$mois[Lang::$lang],'default'=>$mois_nais]) ?>
                  </select>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">&nbsp;</label>
                    <select name="annee_nais" id="annee_nais" class="form-control">
                        <option value="-1" disabled selected>Année</option>
                        <?=Utils::combobox(['count'=>[1930,2020],'default'=>$annee_nais]) ?>
                      </select>
                </div>
            </div>
            <hr>
            <div class="row">
              <div class="form-group col-md-4">
                  <label for="">N° Passeport<span class="text-danger">*</span></label>
                  <input style="text-transform:uppercase" type="text" id="num_passeport" name="num_passeport" value="<?=$num_passeport?>" class="form-control" placeholder="Email">
              </div>
              <div class="form-group col-md-4">
                  <label for="">Autre pièce d'identité </label>
                  <select name="type_piece" id="type_piece" class="form-control">
                    <option value="" selected disabled>Type de pièce</option>
                    <?=Utils::combobox(['array'=>["Carte d'identité Nationale","Permis de conduire"],'default'=>$type_piece])?>
                  </select>
              </div>
              <div class="form-group col-md-4">
                  <label for="">&nbsp;</label>
                  <input style="text-transform:uppercase" type="text" id="autre_piece" name="autre_piece" value="<?=$autre_piece?>" class="form-control" placeholder="Identifiant">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="form-group col-md-6">
                  <label for="">Email<span class="text-danger">*</span></label>
                  <input type="text" value="<?=$data['email']??''?>" class="form-control" placeholder="Email" disabled>
                  <i for="" class="float-right">Votre email vous servira de connexion</i>
              </div>
              <div class="form-group col-md-6">
                  <label for="">Téléphone <span class="text-danger">*</span></label>
                  <input style="" type="tel" id="telephone" value="<?=$data['telephone']??''?>" name="telephone" class="iti-tel form-control" placeholder="Téléphone">
              </div>
            </div>
            <hr>
            <div class="row"><div class="col text-center"><input type="submit" value="Mettre à jour" class="btn btn-outline-danger btn-lg"></div></div>
        </div>
        <?=$_card_footer?>
    </div>
</form></div>
<div class="modal fade" id="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-danger">Réglementation des photos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p class="lead">La longueur de la photo du passeport est de 45 mm, la largeur de 35 mm et au-dessus de la tête une zone libre de 5 mm doit rester.</p>
        <img src="img/norme-photo.png" style="width:80%" alt="">
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('avatar');
      output.src = reader.result;
      document.getElementById('loaded').value=1;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>