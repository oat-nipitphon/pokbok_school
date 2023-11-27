<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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



Route::get('/', [AdminController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Auth::routes();

// Route::get('/control-news', function () {
    //     return view('admin-view.view-control-news');
    // });

Route::get('/data-table', [AdminController::class, 'dataTable'])->name('data.table');
Route::get('/view-control-new', [AdminController::class, 'viewControl'])->name('view.control.new');
Route::post('/insert-content', [AdminController::class, 'insertContent'])->name('insert.control');
Route::get('/edit-new/{id}', [AdminController::class, 'editNew'])->name('edit.new');
Route::post('/edit-new/config', [AdminController::class, 'editNewConfig'])->name('edit.new.config');
Route::post('/delete-new/{id}', [AdminController::class, 'deleteNewConfig'])->name('delete.new.config');
Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');
Route::get('/views/{type}', [AdminController::class, 'views'])->name('views');
Route::get('/view-detail/{id}', [AdminController::class, 'viewDetail'])->name('view.detail');
Route::get('/view-detail-menu/{id}', [AdminController::class, 'viewDetailMenu'])->name('view.detail-menu');

Route::get('/view-ita', [AdminController::class, 'viewIta'])->name('view.ita');
Route::post('/insert-ita', [AdminController::class, 'insertIta'])->name('insert.ita');
Route::get('/view-ita-detail/{id}', [AdminController::class, 'viewItaDetail'])->name('view.ita.detail');
Route::get('/edit-ita/{id}', [AdminController::class, 'editIta'])->name('edit.ita');
Route::post('/edit-ita-config', [AdminController::class, 'editItaConfig'])->name('edit.ita.config');
Route::get('/delete-ita/{id}', [AdminController::class, 'deleteIta'])->name('delete.ita');

Route::get('/history-school', function () {
    return view('menu-school/history-school');
});
Route::get('/logo-school', function () {
    return view('menu-school/logo-school');
});
Route::get('/vision-school', function () {
    return view('menu-school/vision-school');
});
Route::get('/target-school', function () {
    return view('menu-school/target-school');
});
Route::get('/music-school', function () {
    return view('menu-school/music-school');
});
Route::get('/courses-school', function () {
    return view('menu-school/courses-school');
});
Route::get('/house-school', function () {
    return view('menu-school/house-school');
});
