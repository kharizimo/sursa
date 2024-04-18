<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sursa | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=$app_root?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Intl Number -->
  <link rel="stylesheet" href="<?=$app_root?>assets/build/css/intlTelInput.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$app_root?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page lockscreen dark-mode">
<style>
    .iti{flex:1;justify-content: space-between}
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
  <?=$_content?>
<!-- /.login-box -->
<!-- jQuery -->
<script src="<?=$app_root?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=$app_root?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- jquery-validation -->
<script src="<?=$app_root?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?=$app_root?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="<?=$app_root?>assets/build/js/intlTelInput.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=$app_root?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=$app_root?>assets/dist/js/adminlte.min.js"></script>
<script>
  var iti_tel = document.querySelector(".iti-tel-input");
  if(iti_tel!=undefined){var tel=window.intlTelInput(iti_tel,iti)}
  <?=$_script?>
</script>
</body>
</html>
