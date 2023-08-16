<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('Bienvenido', function () {
    // "hola a todos";
    $noticias = [
        ['id' => '1',
        'titulo' => 'Vista pastoral',
        'descripcion' => 'Pastor distrital llegara de visita '],
        ['id' => '2',
            'titulo' => 'Vista pastoral',
            'descripcion' => 'Pastor distrital llegara de visita ']
    ];
    return view('noticia',['noticias' => $noticias ]);
});

Route::get('Bienvenido/{id}', function ($id) {
    return $id;
});

/*Route::get('tarea', function () {
    // "hola a todos";
    $personas  = [
        ['nombre' => 'Valentin',
        'edad' => '18'],
        ['nombre' => 'kelly',
        'edad' => '15']
    ];
    return view('personas',['personas' => $personas ]);
});*/

Route::get('comment',[PostsController::class, 'index']);

Route::get('/evento',[EventoController::class, 'index'])->name('index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
