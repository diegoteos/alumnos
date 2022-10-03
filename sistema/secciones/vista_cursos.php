<?php
include('../templates/cabecera.php');
include('../secciones/cursos.php');
?>

<div class="col-md-5">

    <form action="" method="post">
        <div class="card">
            <div class="card-header">
                Cursos
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">ID</label>
                    <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre_curso" id="nombre_curso" aria-describedby="helpId" placeholder="Nombre del curso">
                </div>
                <div class="btn-group" role="group" aria-label="Button group name">
                    <button type="submit" value="agregar" name="accion" class="btn btn-success">Agregar</button>
                    <button type="submit" value="editar" name="accion" class="btn btn-warning">Editar</button>
                    <button type="submit" value="borrar" name="accion" class="btn btn-danger">Borrar</button>
                </div>
            </div>

        </div>
    </form>


</div>

<div class="col-md-7">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaCursos as $curso){ ?>
            <td><?php echo $curso['id']; ?></td>
            <td><?php echo $curso['nombre_curso']; ?></td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?php echo $curso['id']; ?>">
                    <input type="submit" value="Seleccionar" name="accion" class="btn btn-info">
                </form>
            </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</div>


<?php
include('../templates/pie.php');
?>