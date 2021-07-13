<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CrudController;

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

Route::get('/home', function() {
    
    return view('home');

});

Route::get('/main', [HomeController::class, 'index']);
Route::get('/main/page', [HomeController::class, 'getData']);

Route::get('/admin', [LoginController::class, 'login']);

Route::get('/blog', [CrudController::class, 'index']);
