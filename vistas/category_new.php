<figure class="text-center has-text-info">
    <blockquote class="blockquote">
        <p>CATEGORIA NUEVA</p>
    </blockquote>
    <figcaption class="blockquote-footer">
        Jovenes crack <cite title="Título fuente" class="has-text-info">Mas que un club</cite>
    </figcaption>
</figure>

<div class="container pb-4 pt-4">
    <div class="form-rest mb-6 mt-6"></div>
    <form action="./php/categoria_guardar.php" method="POST" class="FormularioAjax" autocomplete="off">
        <div class="row">
            <div class="col-sm-12 col-md-10 m-auto">
                <div class="card card-primary">
                    <div class="card-header has-background-info">
                        <h4 class="has-text-white">NUEVA CATEGORÍA</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <div class="columns">
                            <div class="column">
                                <div class="control">
                                    <label class="has-text-info">Nombre</label>
                                    <input class="input" type="text" name="categoria_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,50}" maxlength="50" required>
                                </div>
                            </div>
                            <div class="column">
                                <div class="control">
                                    <label class="has-text-info">Ubicación</label>
                                    <input class="input" type="text" name="categoria_ubicacion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{5,150}" maxlength="150">
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
