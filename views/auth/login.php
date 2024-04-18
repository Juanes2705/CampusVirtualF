<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Iniciar Sesión</p>
    
    
    <form class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input 
                type="email"
                class="formulario__input"
                placeholder="Tu Email"
                id="email"
                name="email"
            >
        </div>

        <div class="formulario__campo">
            <label for="contraseña" class="formulario__label">Contraseña</label>
            <input 
                type="contraseña"
                class="formulario__input"
                placeholder="Tu Contraseña"
                id="contraseña"
                name="contraseña"
            >
        </div>

        <input type="submit" class="formulario__submit" value="Iniciar Sesión">
    </form>

    <div class="acciones">
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu contraseña?</a>
    </div>

</main>