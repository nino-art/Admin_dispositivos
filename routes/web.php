<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;


/*Route::get('/saludo', function () {
    return view('saludo');
});

*/

use App\Http\Controllers\DispositivosController;

// Ruta principal del panel
Route::get('/tabler', function() {
    return view('tabler'); // si quieres un dashboard inicial
})->name('tabler');

// Ruta del index de dispositivos dentro del panel
Route::get('/Dispositivos', [DispositivosController::class, 'index'])->name('dispositivos.index');


?>