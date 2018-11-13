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

    <!-- Icons -->
    <link rel="icon" type="image/webp" sizes="32x32" href="./assets/images/favicon-32x32.webp">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link href="./assets/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/2.8.94/css/materialdesignicons.min.css">

    <!-- WebFonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet"> -->

    <!-- Main styles for this application -->
    <!-- <link href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->

	<!-- PERSONALIZADO CSS  -->
	<link href="./assets/css/style.css" rel="stylesheet">
	<!-- ORIGINAL COREUI CSS -->
    <link href="./assets/css/style_new.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="./vendor/grimmlink/toastr/build/toastr.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.4/css/buttons.dataTables.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" />
    <!-- <link rel="stylesheet" type="text/css" href="./vendor/datatables/datatables/media/css/dataTables.bootstrap.min.css">
    <link href="https://cdn.datatables.net/plug-ins/1.10.19/integration/font-awesome/dataTables.fontAwesome.css" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> -->

    <!-- Bootstrap and necessary plugins -->
	<!-- <script src="./vendor/components/jquery/jquery.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="./assets/js/pace.min.js"></script> -->
    <!-- Plugins and scripts required by all views -->
    <!-- <script src="./assets/js/Chart.min.js"></script> -->
    <!-- GenesisUI main scripts -->
	<!-- <script src="./assets/js/template.js"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->


    <!-- <script src="./assets/js/coreui/jquery.min.js"></script> -->
    <script src="./assets/js/coreui/popper.min.js"></script>
    <script src="./assets/js/coreui/bootstrap.min.js"></script>
	<script src="./assets/js/coreui/pace.min.js"></script> 
    <!-- Plugins and scripts required by all views -->
    <script src="./assets/js/coreui/Chart.min.js"></script>
    <!-- GenesisUI main scripts -->
	<script src="./assets/js/coreui/template.js"></script>
    <script src="./vendor/grimmlink/toastr/build/toastr.min.js"></script>
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
        
  function LoadUrl(url){
    window.location.href = url;
}
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.28/dist/sweetalert2.all.min.js"></script>

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <?php
if (isset($_GET['failed'])) {
    if ($_REQUEST['failed'] == 1) {
        $msg = "'Tener presente que la infomación aquí diligenciada deberá ser debidamente soportada cuando sea requerida por la Coordinación Académica'";
        $title = "'AVISO'";
        echo '<script type="text/javascript"> toastr.error(' . $msg . ',' . $title . ')</script>';
    }
}

?>