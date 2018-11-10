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
                    <a class="nav-link active" onclick="LoadUrl('?c=lider')"><i class="icon-speedometer"></i>
                        Escritorio</a>
                </li>
                <li class="nav-title">
                    Gestión
                </li>
                <li class="nav-item">
                    <a class="nav-link " onclick="LoadUrl('?c=lider&m=Horarios')"><i class="fas fa-calendar-alt"></i>Horarios</a>
                </li>
                <li class="nav-item nav-dropdown andres_r open" state-element="close">
                    <a class="nav-link nav-dropdown-toggle"><i class="fas fa-code-branch "></i>Ruta Ficha</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" onclick="LoadUrl('?c=lider&m=Fichas')"><i class="fas fa-graduation-cap"></i>Fichas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="LoadUrl('?c=lider&m=Grupos')"><i class="fab fa-hubspot"></i>Grupos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="LoadUrl('?c=lider&m=Fusionar')"><i class="fas fa-project-diagram"></i>Fusionar</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link " onclick="LoadUrl('?c=lider&m=Instructor')"><i class="fas fa-chalkboard-teacher"></i>
                        Instructor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " onclick="LoadUrl('?c=lider&m=programas')"><i class="fas fa-book"></i> Programa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " onclick="LoadUrl('?c=lider&m=competencias')"><i class="fas fa-torah"></i>
                        Competencias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " onclick="LoadUrl('?c=lider&m=TrimestresPrograma')"><i class="fas fa-grip-horizontal"></i>Trimestre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " onclick="LoadUrl('?c=lider&m=jornadas')"><i class="fas fa-cloud-sun"></i>Jornada</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " onclick="LoadUrl('?c=lider&m=ambiente')"><i class="fas fa-door-open "></i>Ambiente</a>
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