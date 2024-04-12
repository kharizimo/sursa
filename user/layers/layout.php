<?php 
$_title=$_title??'Administration'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sursa | Espace voyageur</title>

  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/summernote/summernote-bs4.min.css">
  <!-- Intl Number -->
  <link rel="stylesheet" href="<?=$app_root?>assets/build/css/intlTelInput.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$app_root?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<style>
    .iti{width:100%}
</style>
<script>
  var validators={rules:{},messages:{}}
  var iti={
    // allowDropdown: true,
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
    utilsScript: "<?=$app_root?>assets/build/js/utils.js",
  }
</script>
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?=$app_root?>assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <script>
    var dataTableOptions={
      language: {
        url: '<?=$app_root?>assets/plugins/datatable-lang-fr.json',
        ordering:false
      },
    }
  </script>
  <?php require 'navbar.php'?>
  <?php require 'sidebar.php'?>

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?=$_title?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Accueil</a></li>
              <li class="breadcrumb-item active"><?=$_title?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"><?=$_content?></div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require 'footer.php'?>
</div>
<!-- ./wrapper -->
<?=$_modals?>
<!-- jQuery -->
<script src="<?=$app_root?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=$app_root?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- jquery-validation -->
<script src="<?=$app_root?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?=$app_root?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="<?=$app_root?>assets/build/js/intlTelInput.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=$app_root?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=$app_root?>assets/plugins/chart.js/Chart.min.js"></script>

<!-- JQVMap -->
<script src="<?=$app_root?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=$app_root?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=$app_root?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=$app_root?>assets/plugins/moment/moment.min.js"></script>
<script src="<?=$app_root?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=$app_root?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=$app_root?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?=$app_root?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=$app_root?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=$app_root?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=$app_root?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=$app_root?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=$app_root?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=$app_root?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?=$app_root?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=$app_root?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=$app_root?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=$app_root?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=$app_root?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- InputMask -->
<script src="<?=$app_root?>assets/plugins/moment/moment.min.js"></script>
<script src="<?=$app_root?>assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=$app_root?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=$app_root?>assets/dist/js/adminlte.js"></script>

<script>
  var iti_tel = document.querySelector(".iti-tel-input");
  if(iti_tel!=undefined){var tel=window.intlTelInput(iti_tel,iti)}
  var table = $('.datatable').DataTable(dataTableOptions);
</script>
<script><?=$_script?></script>
</body>
</html>
