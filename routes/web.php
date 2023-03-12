<?php


use App\Http\Livewire\CatalogController;
use App\Http\Livewire\CategoryController;
use App\Http\Livewire\Course\CourseUpdate;
use App\Http\Livewire\CourseController;
use App\Http\Livewire\Dashboard\DashboardController;
use App\Http\Livewire\GroupController;
use App\Http\Livewire\IndexController;
use App\Http\Livewire\Lesson\LessonController;
use App\Http\Livewire\UserController;
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
        Route::get('/catalog', 'index')->name('catalog.index');
        Route::get('/catalog/{id}', 'show')->name('catalog.show');
    });

    Route::controller(UserController::class)->middleware(['auth'])->group(function () {
        Route::get('profile', 'index')->name('profile.index');
        Route::post('profile/changeAvatar', 'changeAvatar')->name('profile.changeAvatar');
        //        Route::post('profile/changePersonalInfo', 'changePersonalInfo')->name('profile.changePersonalInfo');
        //        Route::post('profile/changeEmail', 'changeEmail')->name('profile.changeEmail');
        //        Route::post('profile/changeTel', 'changeTel')->name('profile.changeTel');
        //        Route::post('profile/changePassword', 'changePassword')->name('profile.changePassword');
    });

    Route::controller(DashboardController::class)->middleware(['auth', 'admin'])->prefix('dashboard')->group(function () {
        Route::get('/show', 'index')->name('dashboard.index');
        Route::get('/courses', 'courses')->name('dashboard.courses');
        Route::get('/categories', 'categories')->name('dashboard.categories');
        Route::get('/users', 'users')->name('dashboard.users');
        Route::get('/groups', 'groups')->name('dashboard.groups');
        Route::get('/applications', 'applications')->name('dashboard.applications');

        Route::controller(CourseController::class)->middleware(['auth'])->prefix('courses')->group(function () {
            Route::get('/add', 'add')->name('courses.add');
            Route::post('/add', 'store')->name('courses.store');
            Route::get('/{id}/edit', 'edit')->name('courses.edit');
            Route::get('/{id}/more', 'more')->name('courses.more');
        });

        Route::controller(CategoryController::class)->middleware(['auth'])->prefix('categories')->group(function () {
            Route::get('/add', 'addView')->name('categories.categoryAddView');
            Route::post('/add', 'store')->name('categories.categoryAdd');
            Route::get('/{id}/edit', 'editView')->name('categories.categoryEditView');
            Route::post('/{id}/edit', 'update')->name('categories.categoryEdit');
            Route::post('/{id}/delete', 'destroy')->name('categories.categoryDelete');
        });

        Route::controller(GroupController::class)->middleware(['auth'])->prefix('groups')->group(function () {
            Route::get('/add', 'addView')->name('groups.addView');
            Route::post('/add', 'store')->name('groups.store');
            Route::get('/{id}/edit', 'editView')->name('groups.editView');
            Route::post('/{id}/edit', 'update')->name('groups.update');
            Route::post('/{id}/delete', 'destroy')->name('groups.destroy');
        });

        Route::controller(LessonController::class)->middleware(['auth'])->prefix('lessons')->group(function () {
            Route::get('/add', 'add')->name('lessons.add');
            Route::post('/add', 'store')->name('lessons.store');
        });
    });

    Route::controller(CourseController::class)->middleware(['auth'])->prefix('courses')->group(function () {
        Route::get('/{id}/more', 'more')->name('courses.more');
    });
});

Route::get('storage/{name}', function ($name) {

    $path = storage_path($name);

    $mime = \File::mimeType($path);

    header('Content-type: ' . $mime);

    return readfile($path);
})->where('name', '(.*)');

//Route::get('/courses/add/livewire', \App\Http\Livewire\Courses::class);


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


//dd(Route::getRoutes());


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
