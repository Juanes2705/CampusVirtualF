<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton-mate" href="/admin/grados/Once/crear">
        <i class="fa-solid fa-circle-plus"></i>
            Añadir Estudiante
    </a>
    <a class="dashboard__boton-mate" href="/admin/grados">
        <i class="fa-solid fa-circle-arrow-left"></i>
            Volver
    </a>
</div>

<div class="dashboard__contenedor">
    <?php if(!empty($estudiante)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th ">Nombre</th>
                    <th scope="col" class="table__th ">Correo</th>
                    <th scope="col" class="table__th ">Grado</th>
                    <th scope="col" class="table__th "></th>
                </tr>
            </thead>

            <tbody class="table__tbody">
            <?php foreach($estudiante as $estudiantes) { ?>
                <tr class="table__tr">
                    <td class="table__td">
                        <?php echo $estudiantes->nombre . " " . $estudiantes->apellido; ?>
                    </td>
                    <td class="table__td">
                        <?php echo $estudiantes->email; ?>
                    </td>
                    <td class="table__td">
                        <?php echo $estudiantes->grado; ?>
                    </td>
                    <td class="table__td--acciones">
                        <a class="table__accion table__accion--editar" href="/admin/grados/Once/editar?id=<?php echo $estudiantes->id; ?>">
                            <i class="fa-solid fa-user-pen"></i>
                            editar
                        </a>

                        <form method="POST" action="/admin/grados/Once/eliminar" class="table__formulario">
                            <input type="hidden" name="id" value="<?php echo $estudiantes->id; ?>">
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
        <p class="text-center">No hay Profesores de Español Aún</p>

    <?php } ?>
</div>


