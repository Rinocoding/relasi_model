<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contoh;

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
    // echo "welcome";
});

Route::get('app.models.post', function() {
    return view('app.models.post');
});

// Route::get('/hello/rino', function() {
//     // namafolder.nama_folder.nama_file
//     return view('hello.rino.index');
// });

// Route::get('hello', 'App\Http\controllers\HelloController@index');
//-----------------Pangil controllers
// Route::get('hello', [Hellocontroller::class, 'index']);
// Route::get('world', [Hellocontroller::class, 'world_message']);
// Route::get('akses', [Contoh::class, 'yes']);
 
Route::post('posts', [PhotoController::class, 'store']);
Route::get('posts', [PhotoController::class, 'index']);
Route::get('posts/create', [PhotoController::class, 'create']);
Route::get('posts/{id}', [PhotoController::class, 'show']);
Route::get('posts/{id}/edit', [PhotoController::class, 'edit']);
Route::patch('posts/{id}', [PhotoController::class, 'update']);
Route::delete('posts/{id}', [PhotoController::class, 'destroy']);
// Route::get('photoss/tes', [PhotoController::class, 'showPost']);

