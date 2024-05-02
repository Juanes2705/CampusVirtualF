<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">
        Informacion Personal
    </legend>

    <div class="formulario__campo">
        <label for="email" class="formulario__label">Correo</label>
        <input 
            type="email" 
            name="email" 
            id="email"
            class="formulario__input"
            placeholder="Correo estudiante"
            value="<?php echo $estudiante->email ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre</label>
        <input 
            type="text" 
            name="nombre" 
            id="nombre"
            class="formulario__input"
            placeholder="Nombre estudiante"
            value="<?php echo $estudiante->nombre ?? ''; ?>">
    </div>
    <div class="formulario__campo">
        <label for="apellido" class="formulario__label">Apellido</label>
        <input 
            type="text" 
            name="apellido" 
            id="apellido"
            class="formulario__input"
            placeholder="Apellido estudiante"
            value="<?php echo $estudiante->apellido ?? ''; ?>">
    </div>
    <div class="formulario__campo">
        <label for="password" class="formulario__label">Contraseña</label>
        <input 
            type="password" 
            name="password" 
            id="password"
            class="formulario__input"
            placeholder="Contraseña estudiante"
            value="<?php echo $estudiante->password ?? ''; ?>">
    </div>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>

    <div class="formulario__campo">
        <label for="grado_input" class="formulario__label">Experiencia (separadas por coma)</label>
        <input
            type="text"
            class="formulario__input"
            id="grado_input"
            placeholder="Ej. Noveno, Decimo, Once"
        >

        <div id="grado" class="formulario__listado"></div>
        <input type="hidden" name="grado" value="<?php echo $estudiante->grado ?? ''; ?>"> 
    </div>
</fieldset>