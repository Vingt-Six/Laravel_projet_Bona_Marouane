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
Route::get('avatar/url/create', [AvatarController::class, 'createurl']);
Route::post('avatar/url', [AvatarController::class, 'storeurl']);

// user route
Route::resource('user', UserController::class);
Route::get('/user/{id}/edituser', [UserController::class, 'edituser']);
Route::put('/user/{id}/updateuser', [UserController::class, 'updateuser']);


Route::resource('categorie', CategorieController::class);

Route::resource('galerie', ImageController::class);
Route::get('/imageurl/create', [ImageController::class, 'createurl']);
Route::post('/imageurl', [ImageController::class, 'storeurl']);
Route::get('/choiceupload', [ImageController::class, 'indexchoice']);
Route::get('/download/image/{id}', [ImageController::class, 'download']);
Route::get('/download/url/{id}', [ImageController::class, 'downloadurl']);
Route::delete('enlevetoi/{id}', [ImageController::class, 'destroy']);

require __DIR__.'/auth.php';
