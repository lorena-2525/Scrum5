

<?php

use Illuminate\Support\Facades\Route;







use App\Http\Controllers\AgendaController;

Route::resource('agendas', AgendaController::class);


use App\Http\Controllers\CategoriaController;

Route::resource('categorias', CategoriaController::class);


use App\Http\Controllers\ComprobantePagoController;

Route::resource('comprobantePagos', ComprobantePagoController::class);


use App\Http\Controllers\InventarioController;

Route::resource('inventarios', InventarioController::class);


use App\Http\Controllers\MascotasController;

Route::resource('mascotas', MascotasController::class);


use App\Http\Controllers\PersonaController;

Route::resource('personas', PersonaController::class);


use App\Http\Controllers\ProductoXservicioController;

Route::resource('productoXservicios', ProductoXservicioController::class);


use App\Http\Controllers\RolController;

Route::resource('roles', RolController::class);


use App\Http\Controllers\RolXprivilegioController;

Route::resource('rolXprivilegios', RolXprivilegioController::class);


use App\Http\Controllers\UsuarioController;

Route::resource('usuarios', UsuarioController::class);


use App\Http\Controllers\UsuarioXrolController;

Route::resource('usuarioXroles', UsuarioXrolController::class);


use App\Http\Controllers\ProductoController;

Route::resource('productos', ProductoController::class);


use App\Http\Controllers\ServicioController;

Route::resource('servicios', ServicioController::class);


use App\Http\Controllers\ValorServicioController;

Route::resource('valorservicios', ValorServicioController::class);


use App\Http\Controllers\VentaController;

Route::resource('ventas', VentaController::class);


use App\Http\Controllers\EmpleadoController;

Route::resource('empleados', EmpleadoController::class);


use App\Http\Controllers\ClienteController;

Route::resource('clientes', ClienteController::class);




//-----------------------------------------------------------

Route::view('/', 'Inicio')->name('Inicio');
Route::view('/InicioDark', 'InicioDark')->name('InicioDark');
Route::view('/Servicios','Servicios')->name('Services');
Route::get('/Agenda', [AgendaController::class, 'index'])->name('Agend');
Route::view('/Accesorios','Accesorios')->name('Accesoris');
Route::view('/Contacto','Contacto')->name('Contact');
Route::view('/Noticias','Noticias')->name('News');
Route::view('/Nosotros','Nosotros')->name('We');
Route::view('/Clientes','Clientes')->name('Client');
Route::view('/Administrador','Administrador')->name('Boss');
Route::view('/Empleados','Empleados')->name('Employeds');


use App\Models\Rol;

Route::get('/test-relaciones', function () {
    // Obtener un rol con ID 1 (cambia el ID según corresponda)
    $rol = Rol::find(50);

    if (!$rol) {
        return response()->json(['error' => 'Rol no encontrado'], 404);
    }

    // Obtener los privilegios asociados a ese rol
    $privilegios = $rol->privilegios;

    return $privilegios; // Esto devolverá los servicios en formato JSON
});

use App\Http\Controllers\Auth\RegisterController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])
    ->middleware('guest'); // Aplica el middleware 'guest' a esta ruta
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::post('logout', [LoginController::class, 'logout'])->name('logout')
   ->middleware('auth') // Aplica el middleware 'auth' a esta ruta
   ->name('logout');


Auth::routes();

Route::get('/Inicio', [App\Http\Controllers\HomeController::class, 'index'])->name('inicio');
