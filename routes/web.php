<?php
use App\Service;
use App\Cuenta;
use Illuminate\Http\request;

Route::middleware('auth')->group(function (){  

	Route::get('/', function () {
        return view('auth.login');
    });

    Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
    
    Route::get('dashboard/agregar_servicio', 'DashboardController@agregar_servicio')->name('servicios');
    
    Route::post('agregar_servicio', 'DashboardController@agregar_servicio_database')->name('servicio_guardado');
    
    Route::delete('eliminar/{id}', 'DashboardController@eliminar_servicio')->name('eliminar_servicio');
    
    Route::get('dashboard/editar_servicio/{id}', 'DashboardController@editar_servicio')->name('editar_servicio');
    
    Route::put('dashboard/editar_servicio/{id}', 'DashboardController@editar_servicio_database')->name('actualizar_servicio');
   
    Route::get('dashboard/cuentas', 'DashboardController@mostrar_cuentas')->name('cuentas');

    Route::post('dashboard/guardar_gasto', 'DashboardController@guardar_gasto')->name('gasto_guardado');

    Route::delete('eliminar_gasto/{id}','DashboardController@eliminar_compra')->name('eliminar_gasto');

    Route::get('dashboard/cuentas/editar/{id}','DashboardController@editar_gasto')->name('editar_gasto');

    Route::put('dashboard/cuentas/editar/{id}','DashboardController@editar_gasto_database')->name('actualizar_gasto');
    
});

Auth::routes();

