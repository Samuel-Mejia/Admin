<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmpleadoController;
use App\Models\Empleado;

Route::get('/', function () {
    return view('welcome');
});


Route::controller(EmpleadoController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('empleados.index', function () {
        return view('empleados.index');
    })->name('empleados.index');


    Route::controller(EmpleadoController::class)->prefix('empleados')->group(function () {
        Route::get('', 'index')->name('empleados');
        Route::get('create', 'create')->name('empleados.create');
        Route::get('index', 'index')->name('empleados.index');
        Route::post('store', 'store')->name('empleados.store');
        Route::get('show/{id}', 'show')->name('empleados.show');
        Route::get('edit/{id}', 'edit')->name('empleados.edit');
        Route::put('edit/{id}', 'update')->name('empleados.update');
        Route::delete('destroy/{id}', 'destroy')->name('empleados.destroy');
        
    });

    // Ruta para el perfil del usuario
Route::get('/perfil/{id}', [EmpleadoController::class, 'showProfile'])->name('views.perfil')->middleware('auth');

// Ruta para la vista de bienvenida
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Ruta para el dashboard del administrador
Route::get('/empleados.index', function () {
    return view('empleados.index');
})->name('empleados.index')->middleware('auth');



    Route::get('/profile', [App\Http\Controllers\EmpleadoController::class, 'profile'])->name('profile');
});