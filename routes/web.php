<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Productos;
use App\Models\Producto;

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
    return view('welcome');
})->name('home');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),])->group(function () {
    Route::get('/productos', Productos::class)->name('productos');

 

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
