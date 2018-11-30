<?php
/* $seconds_to_cache = 3600;
$ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
header("Expires: $ts");
header("Pragma: cache");
// header("Cache-Control: max-age=$seconds_to_cache");
header("Cache-Control: max-age=86400");
 */

// if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'br')) {
//     // header('Content-Encoding: br');
// }
// elseif (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'deflate')) {
//     header('Content-Encoding: deflate');
//     ob_start("ob_gzhandler");
// }
// else
/* if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
    header('Content-Encoding: gzip');
    ob_start("ob_gzhandler");
}
else{
 ob_start();
} */

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
    <link rel="shortcut icon" type="image/webp" sizes="32x32" href="<?php echo APP_URL ?>assets/images/favicon-32x32.webp">

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


    <!--Date Time Range-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

    <?php
    if (isset($_SESSION['user'])) {
        echo '
    <!-- DATATABLES CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.4/css/buttons.bootstrap4.min.css"/> -->
    <link rel="stylesheet" type="text/css" href="'.APP_URL.'node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="'.APP_URL.'node_modules/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"/>

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
    <script>
        const APP_URL='<?php echo APP_URL ?>';
    </script>

    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo APP_URL ?>assets/js/coreui/jquery.min.js"></script>
    <script defer src="<?php echo APP_URL ?>assets/js/coreui/popper.min.js"></script>
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
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

    <!--Date Time Range-->

    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

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


        $(function() {
            $('input[type="daterange"]').daterangepicker({
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                format: 'DD/MM/YYYY'
                }
            });
        });

        // $(function() {
        //     $('input[type="daterange"]').daterangepicker({
        //     opens: 'left'
        //     }, function(start, end, label) {
        //     console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        //     });
        // });
    </script>

    <!-- SWEETALERT JS -->
    <script defer src="<?php echo APP_URL ?>node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <!-- <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.28/dist/sweetalert2.all.min.js"></script> -->

    <!-- DatePicker -->
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <?php
    if (isset($_SESSION['user'])) {
        echo '
    <!-- SELECT2 JS -->
    <script defer src="'.APP_URL.'node_modules/select2/dist/js/select2.full.min.js"></script>
    <script defer src="'.APP_URL.'node_modules/select2/dist/js/i18n/es.js"></script>
    <!-- <script defer src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> -->

    <!-- DATATABLES JS -->
    <script defer src="'.APP_URL.'node_modules/jszip/dist/jszip.min.js"></script>
    <script defer src="'.APP_URL.'node_modules/pdfmake/build/pdfmake.min.js"></script>
    <script defer src="'.APP_URL.'node_modules/pdfmake/build/vfs_fonts.js"></script>
    <script defer src="'.APP_URL.'node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script defer src="'.APP_URL.'node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script defer src="'.APP_URL.'node_modules/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script defer src="'.APP_URL.'node_modules/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script defer src="'.APP_URL.'node_modules/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script defer src="'.APP_URL.'node_modules/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script defer src="'.APP_URL.'node_modules/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script defer src="'.APP_URL.'assets/js/configDataTables.js"></script>
    ';
    }?>

    <script>
    $(function () {
        //$('[data-toggle="tooltip"]').tooltip();
        $("body").tooltip({
            selector: '[data-toggle="tooltip"]',
            container: 'body'
        });
    })

    $(".btn").hover(
        function(){$(this).toggleClass('shadow');}
    );

    function LoadUrl(url) {
        window.location.href = url;
    }
    </script>


</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

