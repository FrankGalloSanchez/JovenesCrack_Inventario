<figure class="text-center has-text-info">
  <blockquote class="blockquote">
    <p>NUEVO USUARIO</p>
  </blockquote>
  <figcaption class="blockquote-footer">
        Jovenes crack <cite title="Título fuente" class="has-text-info">Mas que un club</cite>
    </figcaption>
</figure>

<div class="container pb-1 pt-1">
    <div class="form-rest mb-6 mt-6"></div>
    <form action="./php/usuario_guardar.php" method="POST" class="FormularioAjax" autocomplete="off">
        <div class="row">
            <div class="col-sm-12 col-md-10 m-auto">
                <div class="card card-primary">
                    <div class="card-header has-background-info">
                        <h4 class="has-text-white">REGISTRO DE USUARIOS</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <div class="columns">
                            <div class="column">
                                <div class="has-text-info">
                                    <label class="has-text-blue">Nombres</label>
                                    <input class="input" type="text" name="usuario_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                                </div>
                            </div>
                            <div class="column">
                                <div class="has-text-info">
                                    <label class="has-text-blue">Apellidos</label>
                                    <input class="input" type="text" name="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                                </div>
                            </div>
                        </div>
                        <!-- More form fields -->
                        <div class="columns">
                            <div class="column">
                                <div class="has-text-info">
                                    <label class="has-text-blue">Usuario</label>
                                    <input class="input" type="text" name="usuario_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>
                                </div>
                            </div>
                            <div class="column">
                                <div class="has-text-info">
                                    <label class="has-text-blue">Email</label>
                                    <input class="input" type="email" name="usuario_email" maxlength="70">
                                </div>
                            </div>
                        </div>
                        <!-- More form fields -->
                        <div class="columns">
                            <!-- Dynamic options for "Manzana" and other fields -->
                            <div class="column">
                                <div class="has-text-info">
                                    <label class="has-text-blue">Clave</label>
                                    <input class="input" type="password" name="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
                                </div>
                            </div>
                            <div class="column">
                                <div class="has-text-info">
                                    <label class="has-text-blue">Repetir clave</label>
                                    <input class="input" type="password" name="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
                                </div>
                            </div>
                        </div>
                        <p class="has-text-centered">
                            <button type="submit" class="button is-info is-rounded">Guardar</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
