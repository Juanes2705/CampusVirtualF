<?php 
 
require_once __DIR__ . '/../includes/app.php';
 
use MVC\Router;
use Controllers\AuthController;
use Controllers\DashboardController;
use Controllers\EstadisticasController;
use Controllers\EstadisticasEstuController;
use Controllers\EstadisticasProfeController;
use Controllers\EstudianteController;
use Controllers\EstudiantesdashboardController;
use Controllers\EventosController;
use Controllers\EventosEstuController;
use Controllers\EventosProfeController;
use Controllers\GradosController;
use Controllers\ProfedashboardController;
use Controllers\ProfesoresController;
use Controllers\TareasController;
use Controllers\TareasEstuController;

$router = new Router();


// Login
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);

// Crear Cuenta
$router->get('/registro', [AuthController::class, 'registro']);
$router->post('/registro', [AuthController::class, 'registro']);

// Formulario de olvide mi password
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/reestablecer', [AuthController::class, 'reestablecer']);

// Confirmación de Cuenta
$router->get('/mensaje', [AuthController::class, 'mensaje']);
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']);

// Area Administracion
$router->get('/admin/dashboard', [DashboardController::class, 'index']);


$router->get('/admin/profesores', [ProfesoresController::class, 'index']);
$router->get('/admin/profesores/matematica/crear', [ProfesoresController::class, 'crearMatematicas']);
$router->post('/admin/profesores/matematica/crear', [ProfesoresController::class, 'crearMatematicas']);
$router->get('/admin/profesores/matematica/editar', [ProfesoresController::class, 'editarMatematicas']);
$router->post('/admin/profesores/matematica/editar', [ProfesoresController::class, 'editarMatematicas']);
$router->post('/admin/profesores/matematica/eliminar', [ProfesoresController::class, 'eliminarMatematicas']);
$router->get('/admin/profesores/matematica/matematicas', [ProfesoresController::class, 'matematicas']);

$router->get('/admin/profesores/sociales/crear', [ProfesoresController::class, 'crearSociales']);
$router->post('/admin/profesores/sociales/crear', [ProfesoresController::class, 'crearSociales']);
$router->get('/admin/profesores/sociales/editar', [ProfesoresController::class, 'editarSociales']);
$router->post('/admin/profesores/sociales/editar', [ProfesoresController::class, 'editarSociales']);
$router->post('/admin/profesores/sociales/eliminar', [ProfesoresController::class, 'eliminarSociales']);
$router->get('/admin/profesores/sociales/sociales', [ProfesoresController::class, 'sociales']);

$router->get('/admin/profesores/naturales/crear', [ProfesoresController::class, 'crearNaturales']);
$router->post('/admin/profesores/naturales/crear', [ProfesoresController::class, 'crearNaturales']);
$router->get('/admin/profesores/naturales/editar', [ProfesoresController::class, 'editarNaturales']);
$router->post('/admin/profesores/naturales/editar', [ProfesoresController::class, 'editarNaturales']);
$router->post('/admin/profesores/naturales/eliminar', [ProfesoresController::class, 'eliminarNaturales']);
$router->get('/admin/profesores/naturales/naturales', [ProfesoresController::class, 'naturales']);

$router->get('/admin/profesores/español/crear', [ProfesoresController::class, 'crearEspañol']);
$router->post('/admin/profesores/español/crear', [ProfesoresController::class, 'crearEspañol']);
$router->get('/admin/profesores/español/editar', [ProfesoresController::class, 'editarEspañol']);
$router->post('/admin/profesores/español/editar', [ProfesoresController::class, 'editarEspañol']);
$router->post('/admin/profesores/español/eliminar', [ProfesoresController::class, 'eliminarEspañol']);
$router->get('/admin/profesores/español/español', [ProfesoresController::class, 'español']);

$router->get('/admin/profesores/ingles/crear', [ProfesoresController::class, 'crearIngles']);
$router->post('/admin/profesores/ingles/crear', [ProfesoresController::class, 'crearIngles']);
$router->get('/admin/profesores/ingles/editar', [ProfesoresController::class, 'editarIngles']);
$router->post('/admin/profesores/ingles/editar', [ProfesoresController::class, 'editarIngles']);
$router->post('/admin/profesores/ingles/eliminar', [ProfesoresController::class, 'eliminarIngles']);
$router->get('/admin/profesores/ingles/ingles', [ProfesoresController::class, 'ingles']);

$router->get('/admin/profesores/informatica/crear', [ProfesoresController::class, 'crearInformatica']);
$router->post('/admin/profesores/informatica/crear', [ProfesoresController::class, 'crearInformatica']);
$router->get('/admin/profesores/informatica/editar', [ProfesoresController::class, 'editarInformatica']);
$router->post('/admin/profesores/informatica/editar', [ProfesoresController::class, 'editarInformaticas']);
$router->post('/admin/profesores/informatica/eliminar', [ProfesoresController::class, 'eliminarInformatica']);
$router->get('/admin/profesores/informatica/informatica', [ProfesoresController::class, 'informatica']);

$router->get('/admin/eventos', [EventosController::class, 'index']);

$router->get('/admin/grados', [GradosController::class, 'index']);
$router->get('/admin/grados/Noveno/crear', [GradosController::class, 'crearNoveno']);
$router->post('/admin/grados/Noveno/crear', [GradosController::class, 'crearNoveno']);
$router->get('/admin/grados/Noveno/editar', [GradosController::class, 'editarNoveno']);
$router->post('/admin/grados/Noveno/editar', [GradosController::class, 'editarNoveno']);
$router->post('/admin/grados/Noveno/eliminar', [GradosController::class, 'eliminarNoveno']);
$router->get('/admin/grados/Noveno/noveno', [GradosController::class, 'noveno']);

$router->get('/admin/grados/Decimo/crear', [GradosController::class, 'crearDecimo']);
$router->post('/admin/grados/Decimo/crear', [GradosController::class, 'crearDecimo']);
$router->get('/admin/grados/Decimo/editar', [GradosController::class, 'editarDecimo']);
$router->post('/admin/grados/Decimo/editar', [GradosController::class, 'editarDecimo']);
$router->post('/admin/grados/Decimo/eliminar', [GradosController::class, 'eliminarDecimo']);
$router->get('/admin/grados/Decimo/decimo', [GradosController::class, 'decimo']);

$router->get('/admin/grados/Once/crear', [GradosController::class, 'crearOnce']);
$router->post('/admin/grados/Once/crear', [GradosController::class, 'crearOnce']);
$router->get('/admin/grados/Once/editar', [GradosController::class, 'editarOnce']);
$router->post('/admin/grados/Once/editar', [GradosController::class, 'editarOnce']);
$router->post('/admin/grados/Once/eliminar', [GradosController::class, 'eliminarOnce']);
$router->get('/admin/grados/Once/once', [GradosController::class, 'once']);

$router->get('/admin/estadisticas', [EstadisticasController::class, 'index']);

// Area Profesor
$router->get('/profe/dashboard', [ProfedashboardController::class, 'index']);

$router->get('/profe/tareas', [TareasController::class, 'index']);

$router->get('/profe/eventos', [EventosProfeController::class, 'index']);

$router->get('/profe/estadisticas', [EstadisticasProfeController::class, 'index']);


// Area Estudiante
$router->get('/estudiante/dashboard', [EstudiantesdashboardController::class, 'index']);



$router->get('/estudiante/tareas', [TareasEstuController::class, 'index']);

$router->get('/estudiante/eventos', [EventosEstuController::class, 'index']);

$router->get('/estudiante/estadisticas', [EstadisticasEstuController::class, 'index']);

$router->comprobarRutas();