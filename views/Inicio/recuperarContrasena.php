    <main class="main" style="margin-left: 0px;">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-12 mx-auto">
                <section class="bg-light">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center p-5">Recuperar contraseña</h2>
                        </div>
                        <div class="col-12 d-flex justify-content-center text-center p-5">
                        <form method="POST" action="?c=inicio&m=sendMailRecoveryPassword" class="form-signin">
                <h5>Correo electronico</h5>
                <input type="email" class="adsi-css" name="emailRecovery" placeholder="ejemplo@e-mail.com" required />
                <br>
                <button class="btn-rounded botonlg" type="submit">Enviar</button>
            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <?php
if (isset($data['msg'])) {
    echo "<script>toastr.error('" . $data['msg'] . "','" . $data['title'] . "')</script>";
}
?>

    </div>
    </div>
    <!-- Fin ejemplo de tabla Listado -->
    </div>
</main>
<!-- /Fin del contenido principal -->
</div>