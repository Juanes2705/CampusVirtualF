<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton-mate" href="/admin/profesores/naturales/crear">
        <i class="fa-solid fa-circle-plus"></i>
            Añadir Profesor
    </a>
    <a class="dashboard__boton-mate" href="/admin/profesores">
        <i class="fa-solid fa-circle-arrow-left"></i>
            Volver
    </a>
</div>

<div class="dashboard__contenedor">
    <?php if(!empty($profesor)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th ">Nombre</th>
                    <th scope="col" class="table__th ">Correo</th>
                    <th scope="col" class="table__th ">Materias</th>
                    <th scope="col" class="table__th "></th>
                </tr>
            </thead>

            <tbody class="table__tbody">
            <?php foreach($profesor as $profesores) { ?>
                <tr class="table__tr">
                    <td class="table__td">
                        <?php echo $profesores->nombre . " " . $profesores->apellido; ?>
                    </td>
                    <td class="table__td">
                        <?php echo $profesores->email; ?>
                    </td>
                    <td class="table__td">
                        <?php echo $profesores->tags; ?>
                    </td>
                    <td class="table__td--acciones">
                        <a class="table__accion table__accion--editar" href="/admin/profesores/naturales/editar?id=<?php echo $profesores->id; ?>">
                            <i class="fa-solid fa-user-pen"></i>
                            editar
                        </a>

                        <form method="POST" action="/admin/profesores/naturales/eliminar" class="table__formulario">
                            <input type="hidden" name="id" value="<?php echo $profesores->id; ?>">
                            <button class="table__accion table__accion--eliminar" type="submit">
                                <i class="fa-solid fa-circle-xmark"></i>
                                Eliminar
                            </button>
                        </form>

                    </td>
                </tr>

            <?php } ?>
            </tbody>
        </table>

    <?php } else { ?>
        <p class="text-center">No hay Profesores de Naturales Aún</p>

    <?php } ?>
</div>



