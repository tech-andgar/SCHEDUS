<style>
    .nav-link{
        cursor:pointer;
    }
</style>

<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" onclick="LoadUrl('?c=Coordinador')"><i class="icon-speedometer"></i>
                        Escritorio</a>
                </li>
                <li class="nav-title">
                    Gestión
                </li>
                <li class="nav-item">
                    <a class="nav-link " onclick="LoadUrl('?c=Coordinador&m=Aprobar')"><i class="far fa-thumbs-up"></i>Aprobar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " onclick="LoadUrl('?c=Coordinador&m=Horas_instructores')"><i class="fas fa-users"></i>
                        Instructores</a>
                </li>
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>


    <script>
        //ANDRES
        // $(".nav-dropdown-toggle").click(function(){
        //     $(this).parent().toggleClass("open");
        // });


        // ROBINSON
        $(".andres_r").click(function () {
            var state = $(this).attr('state-element');
            if (state == "close") {
                $('.andres_r').addClass("open");
                $('.andres_r').attr("state-element", "open");
            } else if (state == "open") {
                $('.andres_r').removeClass("open");
                $('.andres_r').attr("state-element", "close");
            }
        });
    </script>