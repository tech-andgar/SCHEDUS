<?php
$seconds_to_cache = 3600;
$ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
header("Expires: $ts");
header("Pragma: cache");
// header("Cache-Control: max-age=$seconds_to_cache");
header("Cache-Control: max-age=86400");


// if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'br')) {
//     // header('Content-Encoding: br');
// }
// elseif (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'deflate')) {
//     header('Content-Encoding: deflate');
//     ob_start("ob_gzhandler");
// }
// else
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
    header('Content-Encoding: gzip');
    ob_start("ob_gzhandler");
}
else{
 ob_start();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title><?php echo @$title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no , maximum-scale=1, user-scalable=no">
    <meta name="description" content="Sistema de control de horario SCHEDUS">
    <meta name="author" content="Andres Garcia">
    <meta name="author" content="Johann Amaya">
    <meta name="keyword" content="Sistema de control de horario SCHEDUS, SCHEDUS">


    <!-- FAVICON -->
    <link rel="icon" type="image/webp" sizes="32x32" href="<?php echo APP_URL ?>assets/images/favicon-32x32.webp">

    <!-- Main styles for this application-->
    <link rel="stylesheet" type="text/css" href="<?php echo APP_URL?>assets/css/coreui/coreui_style.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>assets/css/coreui/pace.min.css" >
    <!-- WebFonts -->
    <link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>assets/css/Font-Exo2.css">
    <!-- PERSONALIZADO CSS  -->
    <link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>assets/css/style.css" rel="stylesheet">



    <!-- Icons-->

    <!-- COREUI ICONS for CoreUI-->
    <link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>assets/css/coreui/coreui-icons.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>vendor/components/flag-icon-css/css/flag-icon.min.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>assets/css/simple-line-icons.min.css">

<?php
if (isset($_SESSION['user'])) {
    echo '
    <!-- FONTS AWESOME 4.7 for tables-->
    <link rel="stylesheet" type="text/css" href="'.APP_URL.'vendor/components/font-awesome/css/fontawesome.min.css"/>

    <!-- Material Design Icons for general-->
    <link rel="stylesheet" type="text/css" href="'.APP_URL.'node_modules/@mdi/font/css/materialdesignicons.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/2.8.94/css/materialdesignicons.min.css"> -->

    ';
}
?>

    <!-- FONTS AWESOME 5.5 for general-->
    <link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>node_modules/@fortawesome/fontawesome-free/css/all.min.css">



    <!-- PLUGINS CSS -->
    <!-- TOASTR CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>vendor/grimmlink/toastr/build/toastr.min.css">

    <!-- SWEETALERT2 CSS -->
    <link rel="stylesheet" href="<?php echo APP_URL ?>node_modules/sweetalert2/dist/sweetalert2.min.css" />

    <?php
    if (isset($_SESSION['user'])) {
        echo '
    <!-- DATATABLES CSS -->
    <link rel="stylesheet" type="text/css" href="'.APP_URL.'vendor/datatables/datatables/media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="'.APP_URL.'node_modules/datatables.net-buttons-dt/css/buttons.dataTables.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.4/css/buttons.dataTables.min.css"> -->
    <link rel="stylesheet" type="text/css" href="'.APP_URL.'assets/css/datatables/dataTables.fontAwesome5.css" >

    <!-- SELECT2 CSS -->
    <link rel="stylesheet" type="text/css" href="'.APP_URL.'node_modules/select2/dist/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="'.APP_URL.'node_modules/@ttskch/select2-bootstrap4-theme/dist/select2-bootstrap4.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap4-select2-theme@1.0.3/src/css/bootstrap4-select2-theme.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.0.4/dist/select2-bootstrap4.min.css"> -->

    <!-- PRETTY CHECKBOX CSS -->
    <link rel="stylesheet" href="'.APP_URL.'node_modules/pretty-checkbox/dist/pretty-checkbox.min.css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" /> -->

    <!-- DISABLED CSS -->
    <!-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">  -->';
    }
    ?>





    <!-- SCRIPTS -->

    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo APP_URL ?>assets/js/coreui/jquery.min.js"></script>
    <script defer src="<?php echo APP_URL ?>assets/js/coreui/popper.min.js"></script>
    <script defer src="<?php echo APP_URL ?>assets/js/coreui/bootstrap.min.js"></script>
    <!-- Plugins and scripts required by all views -->
    <script defer src="<?php echo APP_URL ?>assets/js/coreui/pace.min.js"></script>
    <script defer src="<?php echo APP_URL ?>assets/js/coreui/perfect-scrollbar.min.js"></script>
    <script defer src="<?php echo APP_URL ?>assets/js/coreui/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script defer src="<?php echo APP_URL ?>assets/js/coreui/Chart.min.js"></script>
    <script defer src="<?php echo APP_URL ?>assets/js/coreui/custom-tooltips.min.js"></script>
    <script defer src="<?php echo APP_URL ?>assets/js/coreui/main.js"></script>

    <!-- Plugins and scripts -->
    <!-- TOASTR JS -->
    <script src="<?php echo APP_URL ?>vendor/grimmlink/toastr/build/toastr.min.js"></script>
    <script >
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

    <!-- SWEETALERT JS -->
    <script defer src="<?php echo APP_URL ?>node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <!-- <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.28/dist/sweetalert2.all.min.js"></script> -->

    <?php
    if (isset($_SESSION['user'])) {
        echo '
    <!-- SELECT2 JS -->
    <script defer src="'.APP_URL.'node_modules/select2/dist/js/select2.full.min.js"></script>
    <script defer src="'.APP_URL.'node_modules/select2/dist/js/i18n/es.js"></script>
    <!-- <script defer src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> -->

    <!-- DATATABLES JS -->
    <script defer src="'.APP_URL.'vendor/datatables/datatables/media/js/jquery.dataTables.min.js"></script>
    <script defer src="'.APP_URL.'vendor/datatables/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script defer src="'.APP_URL.'node_modules/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script defer src="'.APP_URL.'node_modules/datatables.net-buttons-dt/js/buttons.dataTables.min.js"></script>
    <!-- <script defer src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script> -->';
    }
    ?>

    <script>
        function LoadUrl(url) {
            window.location.href = url;
        }
    </script>


</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

