<?php 
$layout='login-layout';
$auth=false;
$logs=json_decode(file_get_contents(__DIR__.'\log.json'),true);
$logs[$_s]=$logs[$_s]??$logs[''];
// print_r($logs);exit();
?>
<div class="login-box">
  <div class="login-logo">
    <a href="./"><b>Espace</b> VOYAGEUR</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body text-center">
       <h3 class="text-primary"><?=$logs[$_s]['title']?></h3>
       <p class="content"><?=$logs[$_s]['content']?></p>
       <hr>
       <p><a href="<?=$logs[$_s]['url']??'./'?>" class="btn btn-primary btn-lg" id="btn-ok"><?=$logs[$_s]['btn']??'OK'?></a></p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
