<!DOCTYPE html>
<html lang="es">

<head>
	<title><?php echo @$title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Bootstrap -->
    <link href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/font-awesome-all.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
    <!-- <link href="./vendor/components/font-awesome/css/fontawesome-all.min.css" rel="stylesheet"> -->
    <link rel="icon" type="image/webp" sizes="32x32" href="./assets/images/favicon-32x32.webp">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="./vendor/grimmlink/toastr/build/toastr.min.css"> -->
    <link rel="stylesheet" type="text/css" href="./vendor/datatables/datatables/media/css/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.4/css/buttons.dataTables.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/> -->
    <!-- <link rel="stylesheet" href="https://cdn.materialdesignicons.com/2.8.94/css/materialdesignicons.min.css"> -->
    <!-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.datatables.net/plug-ins/1.10.19/integration/font-awesome/dataTables.fontAwesome.css" rel="stylesheet"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.0.4/dist/select2-bootstrap4.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap4-select2-theme@1.0.3/src/css/bootstrap4-select2-theme.css"> -->

    <link href="./assets/css/style.css" rel="stylesheet">


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./vendor/components/jquery/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap-4.0.0.js"></script>
    <script src="./vendor/grimmlink/toastr/build/toastr.min.js"></script>
    <script src="./vendor/datatables/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="./vendor/datatables/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>
    <script src="./assets/js/dife.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
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

$(document).ready(function(){

});


    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.28/dist/sweetalert2.all.min.js"></script>
</head>

<body>
<?php
if (isset($_GET['failed'])) {
    if ($_REQUEST['failed'] == 1) {
        $msg = "'Tener presente que la infomación aquí diligenciada deberá ser debidamente soportada cuando sea requerida por la Coordinación Académica'";
        $title = "'AVISO'";
        echo '<script type="text/javascript"> toastr.error(' . $msg . ',' . $title . ')</script>';
    }
}
?>