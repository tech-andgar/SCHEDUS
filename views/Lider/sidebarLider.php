

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
                        <a class="nav-link active" onclick="LoadUrl('?c=lider')"><i class="icon-speedometer"></i> Escritorio</a>
                    </li>
                    <li class="nav-title">
                        Gestión
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " onclick="LoadUrl('?c=lider&m=Horarios')"><i class="fas fa-calendar-alt"></i>Horarios</a>
                    </li>
                    <li class="nav-item nav-dropdown andres_r" state-element="close" >
                        <a class="nav-link nav-dropdown-toggle" ><i class="fas fa-code-branch "></i>Ruta Ficha</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="i#"><i class="fas fa-graduation-cap"></i>Fichas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="LoadUrl('?c=lider&m=')"><i class="fab fa-hubspot"></i>Grupos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="LoadUrl('?c=lider&m=instructor')"><i class="fas fa-project-diagram"></i>Fusionar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "  onclick="LoadUrl('?c=lider&m=Instructor')"><i class="fas fa-chalkboard-teacher"></i> Instructor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " onclick="LoadUrl('?c=lider&m=programas')"><i class="fas fa-book"></i> Programa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " onclick="LoadUrl('?c=lider&m=competencias')"><i class="fas fa-torah"></i> Competencias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " onclick="LoadUrl('?c=lider&m=TrimestresPrograma')"><i class="fas fa-grip-horizontal"></i>Trimestre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " onclick="LoadUrl('?c=lider&m=jornadas')"><i class="fas fa-cloud-sun"></i>Jornada</a>
                    </li>
                </ul>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>



<script>
   $(".andres_r").click(function() {
   var state= $(this).attr('state-element');
   if(state=="close"){
    $(this).addClass("open");
    $(this).attr("state-element","open");    
   }else if(state=="open"){
    $(this).removeClass("open");
    $(this).attr("state-element","close"); 
   }
   

});


</script>