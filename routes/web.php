<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FlagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\InfrastructureController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SpecialController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
|-------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

/*
|----------------------------------------------------------
| Adminlar ko'raoladigan qism
|--------------------------------------------------------------------------
*/

Route::middleware(['checkRole:admin', 'auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'admin'])->name('admin');
        Route::get('/about', [AboutController::class, 'index'])->name('about');
        Route::resource('/about', AboutController::class);
        Route::get('/activities', [ActivitiesController::class, 'index'])->name('activities');
        Route::resource('/activities', ActivitiesController::class);
        Route::get('/blog', [BlogController::class, 'index'])->name('blog');
        Route::resource('/blog', BlogController::class);
        Route::get('/card', [CardController::class, 'index'])->name('card');
        Route::resource('/card', CardController::class);
        Route::get('/contact', [ContactController::class, 'index'])->name('contact');
        Route::resource('/contact', ContactController::class);
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::resource('/home', HomeController::class);
        Route::get('/question', [QuestionController::class, 'index'])->name('question');
        Route::resource('/question', QuestionController::class);
        Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher');
        Route::resource('/teacher', TeacherController::class);
        Route::get('/special', [SpecialController::class, 'index'])->name('special');
        Route::resource('/special', SpecialController::class);
        Route::get('/infrastructure', [InfrastructureController::class, 'index'])->name('infrastructure');
        Route::resource('/infrastructure', InfrastructureController::class);
        Route::get('/flag', [FlagController::class, 'index'])->name('flag');
        Route::resource('/flag', FlagController::class);
        Route::get('/price', [PriceController::class, 'index'])->name('price');
        Route::resource('/price', PriceController::class);
        Route::get('/image', [ImageController::class, 'index'])->name('image');
        Route::resource('/image', ImageController::class);
        Route::get('/profile', [UserController::class, 'index'])->name('profile');
        Route::resource('/profile', UserController::class);
    });
});


/*
|--------------------------------------------------------------------------
| Barcha foydalanuvshilar ko'raoladigan qism
|-------------------------------------------------------------
*/

Route::get('/', [MainController::class, 'main'])->name('main');
Route::get('/detail', [MainController::class, 'detail'])->name('detail');
Route::get('/{lang}', function ($lang){

    session(['lang' => $lang]);

    return back();
});
