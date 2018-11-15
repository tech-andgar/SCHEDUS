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
    <link rel="stylesheet" type="text/css" href="./assets/css/coreui/coreui-icons.min.css">
    <link rel="stylesheet" type="text/css" href="./vendor/components/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/simple-line-icons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/2.8.94/css/materialdesignicons.min.css">

    <!-- Main styles for this application-->
    <link rel="stylesheet" type="text/css" href="./assets/css/coreui/coreui_style.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/coreui/pace.min.css" >
    <!-- WebFonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Exo+2">

    <!-- PERSONALIZADO CSS  -->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" rel="stylesheet">

    <!-- PLUGINS CSS -->
    <!-- TOASTR CSS -->
    <link rel="stylesheet" type="text/css" href="./vendor/grimmlink/toastr/build/toastr.min.css">
    <!-- DATATABLES CSS -->
    <link rel="stylesheet" type="text/css" href="./vendor/datatables/datatables/media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.4/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/plug-ins/1.10.19/integration/font-awesome/dataTables.fontAwesome.css" >
    <!-- SELECT2 CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap4-select2-theme@1.0.3/src/css/bootstrap4-select2-theme.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.0.4/dist/select2-bootstrap4.min.css"> -->

    <!-- DISABLED CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" /> -->
    <!-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">  -->

    <!-- SCRIPTS -->
    <!-- CoreUI and necessary plugins-->
    <script src="./assets/js/coreui/jquery.min.js"></script>
    <script src="./assets/js/coreui/popper.min.js"></script>
    <script src="./assets/js/coreui/bootstrap.min.js"></script>
    <!-- Plugins and scripts required by all views -->
    <script src="./assets/js/coreui/pace.min.js"></script>
    <script src="./assets/js/coreui/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/coreui/coreui.min.js"></script> <!-- Plugins and scripts required by this view-->
    <script src="./assets/js/coreui/Chart.min.js"></script>
    <script src="./assets/js/coreui/custom-tooltips.min.js"></script>
    <script src="./assets/js/coreui/main.js"></script>

    <!-- Plugins and scripts -->
    <!-- TOASTR JS -->
    <script src="./vendor/grimmlink/toastr/build/toastr.min.js"></script>

    <!-- SELECT2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <!-- DATATABLES JS -->
    <script src="./vendor/datatables/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="./vendor/datatables/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script> -->

    <!-- SWEETALERT JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.28/dist/sweetalert2.all.min.js"></script>

    <!-- SCRIPT DISABLED -->
    <!-- <script src="./assets/js/dife.js"></script> -->
    <!-- <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->

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
    <?php if (isset($_GET['failed'])) {
            if ($_REQUEST['failed'] == 1) {
                $msg = "'Tener presente que la infomación aquí diligenciada deberá ser debidamente soportada cuando sea requerida por la Coordinación Académica'";
                $title = "'AVISO'";
                echo '<script type="text/javascript"> toastr.error(' . $msg . ',' . $title . ')</script>';
            }
        }
    ?>