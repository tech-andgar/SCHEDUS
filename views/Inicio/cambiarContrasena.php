<main class="container bg-light">
    <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-12 col-md-8 col-12">
            <h4 class="mt-5">CAMBIAR CONTRASEÑA</h4>
            <form method="POST" action="../controlador/validar.php" class="form-signin p-4">
            <div class="form-group">
                <h5>Contraseña</h5>
                <input type="password" class="adsi-css my-3" name="password" placeholder="Ingresa nueva contraseña" required/>
                <h5>Repetir Contraseña</h5>
                <input type="password" class="adsi-css" name="password_verifty" placeholder="Repetir nueva contraseña"required/>
            </div>
                <button class="btn-rounded botonlg" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</main>
