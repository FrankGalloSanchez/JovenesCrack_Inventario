<figure class="text-center has-text-info">
  <blockquote class="blockquote">
    <p>PRODUCTO NUEVO</p>
  </blockquote>
  <figcaption class="blockquote-footer">
        Jovenes crack <cite title="Título fuente" class="has-text-info">Mas que un club</cite>
    </figcaption>
</figure>
<div class="container pb-4 pt-4">
    <?php
    require_once "./php/main.php";
    ?>

    <div class="form-rest mb-1 mt-1"></div>
    <form action="./php/producto_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-12 col-md-10 m-auto">
                <div class="card card-primary">
                    <div class="card-header text-center has-background-info">
                        <h4 class="has-text-white">NUEVO PRODUCTO</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <div class="columns">
                            <div class="column">
                                <div class="control">
                                    <label class="has-text-info">Código de barra</label>
                                    <input class="input" type="text" name="producto_codigo" pattern="[a-zA-Z0-9- ]{1,70}" maxlength="70" required>
                                </div>
                            </div>
                            <div class="column">
                                <div class="control">
                                    <label class="has-text-info">Nombre</label>
                                    <input class="input" type="text" name="producto_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="control">
                                    <label class="has-text-info">Precio</label>
                                    <input class="input" type="text" name="producto_precio" pattern="[0-9.]{1,25}" maxlength="25" required>
                                </div>
                            </div>
                            <div class="column">
                                <div class="control">
                                    <label class="has-text-info">Stock</label>
                                    <input class="input" type="text" name="producto_stock" pattern="[0-9]{1,25}" maxlength="25" required>
                                </div>
                            </div>
                            <div class="column">
                                <label class="has-text-info">Categoría</label><br>
                                <div class="select is-rounded">
                                    <select name="producto_categoria">
                                        <option value="" selected="">Seleccione una opción</option>
                                        <?php
                                        $categorias = conexion();
                                        $categorias = $categorias->query("SELECT * FROM categoria");
                                        if ($categorias->rowCount() > 0) {
                                            $categorias = $categorias->fetchAll();
                                            foreach ($categorias as $row) {
                                                echo '<option value="' . $row['categoria_id'] . '">' . $row['categoria_nombre'] . '</option>';
                                            }
                                        }
                                        $categorias = null;
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <label class="has-text-info">Foto o imagen del producto</label><br>
                                <div class="file is-small has-name">
                                    <label class="file-label">
                                        <input class="file-input" type="file" name="producto_foto" accept=".jpg, .png, .jpeg">
                                        <span class="file-cta">
                                            <span class="file-label">Imagen</span>
                                        </span>
                                        <span class="file-name">JPG, JPEG, PNG. (MAX 3MB)</span>
                                    </label>
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