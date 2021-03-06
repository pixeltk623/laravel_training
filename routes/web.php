<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;

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

Route::get('/blog', [CrudController::class, 'index']);
Route::get('/create', [CrudController::class, 'loadForm']);
Route::post('/create', [CrudController::class, 'manageBlog'])->name('create.manageBlog');

Route::get('/edit_blog/{id}', [CrudController::class, 'editBlog']);

Route::post('/updateBlog', [CrudController::class, 'updateBlog'])->name('create.updateBlog');

Route::get('/delete/{id}', [CrudController::class, 'deleteBlog']);

Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/manage_blog', [BlogController::class, 'manage_blog']);
Route::get('/manage_blog/{id}', [BlogController::class, 'manage_blog']);

Route::post('/manage_process', [BlogController::class, 'manage_process'])->name('create.manage_process');

/* -- Admin Pannel Start -- */

Route::get('/login', [AdminController::class, 'index']);


Route::post('/auth', [AdminController::class, 'auth'])->name('admin.auth');

Route::get('/update-password', [AdminController::class, 'updatePassword']);

Route::group(['middleware'=> 'admin_auth'], function() {
	Route::get('/dashboard', [AdminController::class, 'adminDashBoard']);
});

Route::get('/logout', function(Request $request) {

	$request->session()->forget(['Login_User', 'Login_id']);
	$request->session()->flush();
	$request->session()->flash('error', 'You are LogOut Now!');
    return redirect('login');

});

Route::get('/product', [ProductController::class, 'index']);

Route::get('/add-to-cart/{id}', [ProductController::class, 'addToCart']);



    