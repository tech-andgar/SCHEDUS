<section class="bg-light">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center" style="padding-top: 5%;">
            <h2 class="text-center p-2">HORARIO DE FORMACION E INFORMACION PARA APRENDICES CEET</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12 d-flex justify-content-center text-center p-5">
            <form action="#" method="post">
                <label for="num_ficha">Numero de Ficha</label>
                <div id="textbox-search" class="input-group">
                    <input class="form-control border-secondary py-2" type="search" placeholder="Busqueda">
                    <div class="input-group-append">
                        <button class="btn btn-outline-info form-control" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <small id="helpId" class="form-text text-muted">Ingresa su numero de ficha para buscar horario asignado</small>
            </form>
        </div>
    </div>
</section>

<?php 
if (isset($data['msg'])) {
    echo "<script>toastr.error('".$data['msg']."','".$data['title']."')</script>";
}
?>