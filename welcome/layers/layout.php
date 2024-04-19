<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/x-icon" href="<?=$_root?>img/logo-sursa.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sursa | <?=$title?></title>
    <!-- Font Awesome Icons -->   
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- flag-icon-css -->
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$app_root?>assets/build/css/intlTelInput.css">
  <link rel="stylesheet" href="<?=$app_root?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/flag-icon-css/css/flag-icon.min.css">
  <script>
    
    var validators={rules:{},messages:{}}
    var iti={
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
       hiddenInput: "full_number",
       initialCountry: "cd",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      preferredCountries: ['cd','us','fr','uk','et'],
      separateDialCode: true,
      utilsScript: "build/js/utils.js",
    }
  </script>
</head>
<body class="hold-transition layout-top-nav">
    <style>
        @keyframes load_animate {
            0%{width: 90px;height:60px}
            50%{width: 140px;height:100px}
            100%{width: 90px;height:60px}
        }
        .preloader img{animation:load_animate 0.9s infinite}
        .content-wrapper{
          background-size:cover;
          background-attachment:fixed;
        }
        .card{
          background-color:rgba(255,255,255,.6)
        }
        .card-form{
          max-width:700px;
          margin-left:auto;
          margin-right:auto;
        }
        .card-form .card-body{padding:10%}
        .iti{width:100%}
        .text-upper{text-transform:uppercase}
    </style>
<div class="wrapper"> 
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__pulse" src="img/logo-sursa.png" alt="AdminLTELogo" height="40" width="90">
    </div>
    <?=$_header?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding-top:40px;background-image:url(img/bg/<?=$_bg?>)">
        <!-- Main content -->
    <div class="content">
      <div class="container">
        <?php if($flash_info??true):?>
        
        <?php endif?>
        <?=$_content?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?=$_footer?>
</div>
<div id="modal-code" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <form class="modal-content" action="#">
          <input type="hidden" id="href">
            <div class="modal-header">
                <h5 class="modal-title">Code d'accès</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="error" class="text-center text-danger text-sm"></div>
                <div class="form-group text-center">
                  <label for="">Entrez le code</label>
                  <input type="text" id="code" class="form-control text-bold">
                </div>
                <p class="text-center text-sm">Verifiez votre adresse mail</p>
                <hr>
                <div class="form-group text-center"><button type="submit" class="btn btn-primary">Soumettre</button></div>
            </div>
        </form>
    </div>
</div>
<!-- ./wrapper -->
<?php require 'modals.php'?>
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?=$app_root?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=$app_root?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="<?=$app_root?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?=$app_root?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="<?=$app_root?>assets/build/js/intlTelInput.js"></script>
<!-- Select2 -->
<script src="<?=$app_root?>assets/plugins/select2/js/select2.full.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?=$app_root?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=$app_root?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=$app_root?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=$app_root?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=$app_root?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=$app_root?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=$app_root?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script><?=$_script?></script>
<script><?php require 'modals.js'?></script>

<script>
  $(function(){
    

    $.validator.setDefaults({
      submitHandler: function () {
        return true
      },
    });
    $('#forms').validate({
      rules:validators.rules,
      messages:validators.messages,/** */
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });

    var iti_tel = document.querySelector(".iti-tel");
    if(iti_tel!=undefined){var tel=window.intlTelInput(iti_tel,iti)}

    $('#type_doc_voyage').change(function(){

      $('#num_doc_voyage').val('')
      if($(this).val()=='Passeport'){
        $('#num_doc_voyage').val($('#h-passeport').val())
      }
      else{
        if($(this).val()==$('#h-type-piece').val()){
          $('#num_doc_voyage').val($('#h-autre-piece').val())
        }
      }
    })
  
    $('[data-toggle="tooltip"]').tooltip()

    $('#modal-code').on('show.bs.modal',function(e) {
      var href=$(e.relatedTarget).data('href')
      $(this).find('#href').val(href)
      $(this).find('#code').html('')
      $.ajax({url:'api.sursa.cd/user/creat-super-code'})
    })
    $('#modal-code form').on('submit',function(e){
      e.preventDefault()
      var form=$(this)
      var href=$(this).find('#href').val()
      var code=$(this).find('#code').val()
      $.ajax({url:'api.sursa.cd/user/login-super-code?code='+code,success:function(e){
        if(e=='success'){document.location=href}
        else{form.find('#error').html("Code incorrect !")}
      }})
    })

    //Initialize Select2 Elements
    $('.select2').select2()
    // Initialize DataTables
    $('.data-table').DataTable()
  })
</script>
</body>
</html>
