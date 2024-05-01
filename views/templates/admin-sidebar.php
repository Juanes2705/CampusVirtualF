<aside class="dashboard__sidebar">
    <nav class="dashboard__menu">
        <a href="/admin/dashboard" class="dashboard__enlace <?php echo pagina_actual('/dashboard') ? 'dashboard__enlace--actual' : '' ; ?>">
            <i class="fa-solid fa-house dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                inicio
            </span>
        </a>
        <a href="/admin/profesores" class="dashboard__enlace <?php echo pagina_actual('/profesores') ? 'dashboard__enlace--actual' : '' ; ?>">
            <i class="fa-solid fa-chalkboard-user dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                profesores
            </span>
        </a>
        <a href="/admin/eventos" class="dashboard__enlace <?php echo pagina_actual('/eventos') ? 'dashboard__enlace--actual' : '' ; ?>">
            <i class="fa-solid fa-calendar-days dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                eventos
            </span>
        </a>
        <a href="/admin/grados" class="dashboard__enlace <?php echo pagina_actual('/grados') ? 'dashboard__enlace--actual' : '' ; ?>">
            <i class="fa-solid fa-users dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                grados
            </span>
        </a>
        <a href="/admin/estadisticas" class="dashboard__enlace <?php echo pagina_actual('/estadisticas') ? 'dashboard__enlace--actual' : '' ; ?>">
            <i class="fa-solid fa-chart-simple dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                estadisticas
            </span>
        </a>
    </nav>
</aside>