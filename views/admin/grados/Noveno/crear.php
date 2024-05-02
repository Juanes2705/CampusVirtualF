<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-volver">
    <a class="dashboard__boton-mate" href="/admin/grados/Noveno/noveno">
        <i class="fa-solid fa-circle-arrow-left"></i>
            Volver
    </a>
</div>

<div class="dashboard__formulario">
    <?php 
        include_once __DIR__ . './../../../templates/alertas.php';
    ?>

    <form method="POST" class="formulario" action="/admin/grados/Noveno/crear">
        <?php include_once __DIR__ . './../formulario.php'; ?>

        <input class="formulario__submit formulario__submit--registrar" type="submit" value="Registrar Estudiante">
    </form>

</div>