<?php


use App\Http\Livewire\CatalogController;
use App\Http\Livewire\IndexController;
use App\Http\Livewire\UserController;
use App\Http\Livewire\DashboardController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['namespace' => 'App\Http\Livewire'], function () {

    Route::controller(IndexController::class)->group(function () {
        Route::get('/', 'index')->name('index.index');
        Route::get('/#benefits', 'index')->name('index.benefits');
        Route::get('/#about', 'index')->name('index.about');
        Route::get('/#review', 'index')->name('index.review');
    });

    Route::controller(CatalogController::class)->group(function () {
        Route::get('catalog', 'index')->name('catalog.index');
        Route::get('catalog/{id}', 'show')->name('index.show');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('profile', 'index')->name('profile.index');
    });

    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard.index');
    });

});


 Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {

//    Route::controller(IndexController::class)->group(function () {
//        Route::get('/', 'index')->name('index.index');
//        Route::get('/#benefits', 'index')->name('index.benefits');
//        Route::get('/#about', 'index')->name('index.about');
//        Route::get('/#review', 'index')->name('index.review');
//    });

//    Route::controller(CatalogController::class)->group(function () {
//        Route::get('catalog', 'index')->name('catalog.index');
//        Route::get('catalog/{id}', 'show')->name('index.show');
//    });

//    Route::controller(UserController::class)->group(function () {
//        Route::get('profile', 'index')->name('profile.index');
//    });

//    Route::controller(DashboardController::class)->group(function () {
//        Route::get('dashboard', 'index')->name('dashboard.index');
//    });


//    Route::get('/', IndexController::class)->name('index.index');
//    Route::get('catalog', CatalogController::class)->name('catalog.index');
//    Route::get('catalog/{id}', [CourseController::class, 'showCourse'])->name('catalog.show');
//    Route::get('profile', [UserController::class, 'showProfile'])->name('user.index');
//    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});





Auth::routes();

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
