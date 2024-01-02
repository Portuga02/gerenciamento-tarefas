<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/todo', [TodoController::class, 'index'])->name('todo');
Route::get('todo/show/{id}', [TodoController::class, 'show'])->name('showTodo');
Route::post('todo/store', [TodoController::class, 'store'])->name('todoStore');
Route::get('todo/create', [TodoController::class, 'create'])->name('todoCreate');
Route::get('todo/{id}/edit', [TodoController::class, 'edit'])->name('todoEdit');
Route::put('todo/update', [TodoController::class, 'update'])->name('todoUpdate');
Route::delete('/destroy', [TodoController::class, 'destroy'])->name('todoDestroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
