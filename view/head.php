<?php
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title><?php echo @$title;?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap -->
    <link href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./vendor/components/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
    <link rel="icon" type="image/webp" sizes="32x32" href="./assets/images/favicon-32x32.webp">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./vendor/grimmlink/toastr/build/toastr.min.css">
    <link href="./assets/css/style.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./vendor/components/jquery/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap-4.0.0.js"></script>
    <script src="./vendor/grimmlink/toastr/build/toastr.min.js"></script>
    <script src="./assets/js/dife.js"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-left",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "500",
            "hideDuration": "5000",
            "timeOut": "15000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.28/dist/sweetalert2.all.min.js"></script>
</head>

<body>
  <?php
if (isset($_GET['failed'])) {
  if ($_REQUEST['failed'] == 1) {
    $msg = "'Tener presente que la infomación aquí diligenciada deberá ser debidamente soportada cuando sea requerida por la Coordinación Académica'";
    $title ="'AVISO'";
    echo '<script type="text/javascript"> toastr.error('.$msg.','.$title.')</script>';
  }
}
?>