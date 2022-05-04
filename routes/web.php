<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Models\Avatar;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/dashboard', function () {
    $avatar = Avatar::all();
    $users = User::all();
    return view('dashboard', compact('users', 'avatar'));
})->middleware(['auth'])->name('dashboard');

Route::resource('avatar', AvatarController::class);

// user route
Route::resource('user', UserController::class);
Route::get('/user/{id}/edituser', [UserController::class, 'edituser']);
Route::put('/user/{id}/updateuser', [UserController::class, 'updateuser']);


Route::resource('categorie', CategorieController::class);
Route::resource('galerie', ImageController::class);

require __DIR__.'/auth.php';
