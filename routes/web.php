<?php
//debes añadir los controladores
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\TarjetaController;
use App\Http\Controllers\ResultadoController;
use App\Http\Controllers\SuspensioneController;

Route::get('/', [SessionController::class, 'create'])->name('login.index');
Route::post('/', [SessionController::class, 'store'])->name('login.index');
//en este archivo se definen las rutas 

Route::get('/register', [RegisterController::class, 'create'])->name('register.index')->Middleware('auth');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store')->Middleware('auth');
Route::get('/Login', [SessionController::class, 'create'])->name('login.index')->Middleware('auth');
Route::post('/Login', [SessionController::class, 'store'])->name('login.store')->Middleware('auth');
Route::get('/logout', [SessionController::class, 'destroy'])->name('login.destroy')->Middleware('auth');
Route::get('/admin', [AdminController::class, 'create'])->name('admin.index')->Middleware('auth');
Route::get('/admin', [AdminController::class, 'index'])
->Middleware('auth.admin') //se establece en el kernel.php
->name('admin.index');
/*Route::get('Equipo/createEquipo', [EquipoController::class, 'create']);*/
Route::resource('Equipo',EquipoController::class)->Middleware('auth');  
Route::resource('tarjeta',TarjetaController::class)->Middleware('auth');
Route::resource('suspensione',SuspensioneController::class)->Middleware('auth');
Route::resource('resultado',ResultadoController::class)->Middleware('auth');
Route::resource('jugadores',App\Http\Controllers\JugadoreController::class)->Middleware('auth');  
Route::resource('torneo',App\Http\Controllers\TorneoController::class);
Route::resource('programaciones',App\Http\Controllers\ProgramacioneController::class)->Middleware('auth');



