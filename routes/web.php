<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guru\GuruController;
use App\Http\Controllers\Guru\GuruPostController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/kelas/{kelas:slug}', [PagesController::class, 'showKelas']);
Route::get('/kelas/{category:slug}', [PagesController::class, 'showCategory']);

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

Route::get('/live-streaming', function () {
    return view('live-streaming');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/lokasi', function () {
    return view('lokasi');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/admin', function () {
    return view('admin.index');
});

// Route::get('agrobisnis', 'App\Http\Controllers\PagesController@agrobisnis');
// Route::get('barbershop', 'App\Http\Controllers\PagesController@barbershop');
// Route::get('beverage', 'App\Http\Controllers\PagesController@beverage');
// Route::get('desainKreatif', 'App\Http\Controllers\PagesController@desainKreatif');
// Route::get('komputerDasar', 'App\Http\Controllers\PagesController@komputerDasar');
// Route::get('kuliner', 'App\Http\Controllers\PagesController@kuliner');
// Route::get('mengemudi', 'App\Http\Controllers\PagesController@mengemudi');
// Route::get('login', 'App\Http\Controllers\PagesController@login');

Route::resource('posts', 'App\Http\Controllers\PostController');

Auth::routes();

Route::prefix('user')->name('user.')->group(function(){
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.user.login')->name('login');
        Route::view('/register','dashboard.user.register')->name('register');
        Route::post('/create',[UserController::class,'create'])->name('create');
        Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.user.home')->name('home');
        Route::post('/logout',[UserController::class,'logout'])->name('logout');
    });

});

Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
      
    });

});

Route::prefix('guru')->name('guru.')->group(function(){
    Route::middleware(['guest:guru','PreventBackHistory'])->group(function(){
         Route::view('/login','dashboard.guru.login')->name('login');
         Route::view('/register','dashboard.guru.register')->name('register');
         Route::post('/create', [GuruController::class,'create'])->name('create');
         Route::post('/check',[GuruController::class,'check'])->name('check');
    });

    Route::get('/guruPosts/checkSlug', [GuruPostController::class, 'checkSlug']);

    Route::middleware(['auth:guru','PreventBackHistory'])->group(function(){
         Route::view('home','dashboard.guru.home')->name('home');
         Route::get('guruPosts', [GuruPostController::class, 'index']);
         Route::get('guruPosts/create', [GuruPostController::class, 'create']);
         Route::post('guruPosts', [GuruPostController::class, 'store']);
         Route::get('guruPosts/{post:slug}', [GuruPostController::class, 'show']);
         Route::get('guruPosts/{post:slug}/edit', [GuruPostController::class, 'edit']);
         Route::patch('guruPosts/{post}', [GuruPostController::class, 'update']);
         Route::delete('guruPosts/{post}', [GuruPostController::class, 'destroy']);
         Route::post('logout',[GuruController::class,'logout'])->name('logout');
    });

});