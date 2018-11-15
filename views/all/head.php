<?php
// $seconds_to_cache = 3600;
// $ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
// header("Expires: $ts");
header("Pragma: cache");
// header("Cache-Control: max-age=$seconds_to_cache");
header("Cache-Control: max-age=86400");

// if (substr_count($_SERVER[‘HTTP_ACCEPT_ENCODING’], ‘gzip’)) {
//     ob_start(“ob_gzhandler”);
// } else {
//     ob_start();
// }

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
    <link rel="icon" type="image/webp" sizes="32x32" href="./assets/images/favicon-32x32.webp">

    <!-- Icons-->


    <!-- COREUI ICONS for CoreUI-->
    <link rel="stylesheet" type="text/css" href="./assets/css/coreui/coreui-icons.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="./vendor/components/flag-icon-css/css/flag-icon.min.css"> -->
    <link rel="stylesheet" type="text/css" href="./assets/css/simple-line-icons.min.css">

    <!-- FONTS AWESOME 5.5 for general-->
    <link rel="stylesheet" type="text/css" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- Main styles for this application-->
    <link rel="stylesheet" type="text/css" href="./assets/css/coreui/coreui_style.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/coreui/pace.min.css" >
    <!-- WebFonts -->
    <link rel="stylesheet" type="text/css" href="./assets/css/Font-Exo2.css">
    <!-- PERSONALIZADO CSS  -->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" rel="stylesheet">

    <!-- PLUGINS CSS -->
    <!-- TOASTR CSS -->
    <link rel="stylesheet" type="text/css" href="./vendor/grimmlink/toastr/build/toastr.min.css">

    <!-- SCRIPTS -->

    <!-- CoreUI and necessary plugins-->
    <script defer src="./assets/js/coreui/jquery.min.js"></script>
    <script defer src="./assets/js/coreui/popper.min.js"></script>
    <script defer src="./assets/js/coreui/bootstrap.min.js"></script>
    <!-- Plugins and scripts required by all views -->
    <script defer src="./assets/js/coreui/pace.min.js"></script>
    <script defer src="./assets/js/coreui/perfect-scrollbar.min.js"></script>
    <script defer src="./assets/js/coreui/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script defer src="./assets/js/coreui/custom-tooltips.min.js"></script>
    <script defer src="./assets/js/coreui/main.js"></script>

    <!-- Plugins and scripts -->
    <!-- TOASTR JS -->
    <script defer src="./vendor/grimmlink/toastr/build/toastr.min.js"></script>
    <!-- SWEETALERT JS -->
    <script defer src="./node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <!-- <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.28/dist/sweetalert2.all.min.js"></script> -->

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

        function LoadUrl(url) {
            window.location.href = url;
        }
    </script>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
