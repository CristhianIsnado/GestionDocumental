<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::resource('Localidad','LocalidadController');

Route::resource('GradoDeInstruccion','GradoDeInstruccionController');

Route::resource('Profesion','ProfesionController');

Route::resource('Tema','TemaController');

Route::resource('TipoDeMedico','TipoDeMedicoController');

Route::resource('Especialidad','EspecialidadController');

Route::resource('ServicioMedico','ServicioMedicoController');

Route::resource('TipoDeTarea','TipoDeTareaController');

Route::resource('Privilegio','PrivilegioController');

Route::resource('Grupo','GrupoController');

Route::resource('Repositorio','RepositorioController');

Route::resource('TipoDeArchivo','TipoDeArchivoController');

Route::resource('Metadato','MetadatoController');

Route::resource('Usuario','UsuarioController');

Route::resource('Preferencias','PreferenciasController');

Route::resource('Telefono','TelefonoController');

Route::resource('UsuarioGrupo','UsuarioGrupoController');

Route::resource('PrivilegioRepositorio','PrivilegioRepositorioController');

Route::resource('Paciente','PacienteController');

Route::resource('Tarea','TareaController');

Route::resource('UsuarioTarea','UsuarioTareaController');

Route::resource('Notificacion','NotificacionController');

Route::resource('HistorialClinico','HistorialClinicoController');

Route::resource('Medico','MedicoController');

Route::resource('Departamento','DepartamentoController');

Route::resource('EspecialidadMedico','EspecialidadMedicoController');

Route::resource('Recepcionista','RecepcionistaController');

Route::resource('Consulta','ConsultaController');

Route::resource('CentroMedico','CentroMedicoController');

Route::resource('Registra','RegistraController');

Route::resource('Archivo','ArchivoController');

Route::resource('RepositorioDelArchivo','RepositorioDelArchivoController');

Route::resource('Etiqueta','EtiquetaController');

