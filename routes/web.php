<?php

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

Route::get('/','App\Http\Controllers\FrontendController@index');
Route::get('/privacy','App\Http\Controllers\FrontendController@privacy');
Route::get('/terms','App\Http\Controllers\FrontendController@terms');
Route::get('locale/{locale}','App\Http\Controllers\FrontendController@switch');

Route::get('/admin', function () {
    return redirect('dashboard');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('register', function () {
    return redirect('login');
});

Route::get('home', function () {
    return redirect('dashboard');
});

Route::get('admin', function () {
    return redirect('dashboard');
});

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function ($router) {
    $router->get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    $router->group(['prefix' => 'blog'], function ($router) {
        $router->get('/', [App\Http\Controllers\Admin\BlogController::class, 'index'])->name('blog.list');
        $router->get('/create', [App\Http\Controllers\Admin\BlogController::class, 'create'])->name('blog.create');
        $router->post('/create', [App\Http\Controllers\Admin\BlogController::class, 'store'])->name('blog.store');
        $router->get('/edit/{id}', [App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('blog.edit');
        $router->put('/edit/{id}', [App\Http\Controllers\Admin\BlogController::class, 'update'])->name('blog.update');
        $router->delete('/destroy/{id}', [App\Http\Controllers\Admin\BlogController::class, 'destroy'])->name('blog.destroy');
    });
});
