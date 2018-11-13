<!DOCTYPE html>
<html lang="es">

<head>
    <title>
        <?php echo @$title; ?>
    </title>
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
    <link href="./assets/css/coreui/coreui-icons.min.css" rel="stylesheet">
    <link href="./vendor/components/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="./assets/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/2.8.94/css/materialdesignicons.min.css">
    <!-- Main styles for this application-->
    <link href="./assets/css/coreui/coreui_style.css" rel="stylesheet">
    <link href="./assets/css/coreui/pace.min.css" rel="stylesheet">

    <!-- WebFonts -->
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">


    <!-- PERSONALIZADO CSS  -->
    <link href="./assets/css/style.css" rel="stylesheet">
    <!-- ORIGINAL COREUI CSS -->
    <!-- <link href="./assets/css/style_new.css" rel="stylesheet"> -->

    <link rel="stylesheet" type="text/css" href="./vendor/grimmlink/toastr/build/toastr.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.4/css/buttons.dataTables.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" />
    <!-- <link rel="stylesheet" type="text/css" href="./vendor/datatables/datatables/media/css/dataTables.bootstrap.min.css">
    <link href="https://cdn.datatables.net/plug-ins/1.10.19/integration/font-awesome/dataTables.fontAwesome.css" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> 
    -->
    
        <!-- CoreUI and necessary plugins-->
        <script src="./assets/js/coreui/jquery.min.js"></script>
        <script src="./assets/js/coreui/popper.min.js"></script>
        <script src="./assets/js/coreui/bootstrap.min.js"></script>
        <script src="./assets/js/coreui/pace.min.js"></script>
        <script src="./assets/js/coreui/perfect-scrollbar.min.js"></script>
        <script src="./assets/js/coreui/coreui.min.js"></script> <!-- Plugins and scripts required by this view-->
        <script src="./assets/js/coreui/Chart.min.js"></script>
        <script src="./assets/js/coreui/custom-tooltips.min.js"></script>
        <script src="./assets/js/coreui/main.js"></script>
        <script src="./vendor/grimmlink/toastr/build/toastr.min.js"></script>

        <!-- Bootstrap and necessary plugins -->
        <!-- Plugins and scripts required by all views -->
        <!-- GenesisUI main scripts -->
        <!-- <script src="./vendor/datatables/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="./vendor/datatables/datatables/media/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>
        <script src="./assets/js/dife.js"></script>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->
        
        






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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.28/dist/sweetalert2.all.min.js"></script>

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <?php
if (isset($_GET['failed'])) {
    if ($_REQUEST['failed'] == 1) {
        $msg = "'Tener presente que la infomación aquí diligenciada deberá ser debidamente soportada cuando sea requerida por la Coordinación Académica'";
        $title = "'AVISO'";
        echo '<script type="text/javascript"> toastr.error(' . $msg . ',' . $title . ')</script>';
    }
}

?>