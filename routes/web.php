<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;

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
Route::post('/contact/send',[ContactController::class,'store'])->name('contact.send');

Route::get('/register',[AuthController::class,'showRegister'])->name('register');
Route::post('/register',[AuthController::class,'register']);

Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);

Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('dashboard');

use App\Http\Controllers\BlogController;
use App\Models\Blog;

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

Route::resource('blogs', BlogController::class);

Route::get('/messages',[ContactController::class,'index'])->name('messages');

Route::delete('/messages/{id}',[ContactController::class,'destroy'])->name('messages.delete');


});


Route::get('/', function () {
    $blogs = Blog::latest()->paginate(10);

    return view('home',compact('blogs'));
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('service');
});

Route::get('/getquote', function () {
    return view('getquote');
});

Route::get('/challenge', function () {
    return view('challanges');
});

Route::get('/industry', function () {
    return view('industry');
});

Route::get('/global', function () {
    return view('global');
});

use App\Http\Controllers\ServiceController;

Route::get('/services/{slug}', [ServiceController::class, 'show']);

Route::get('/blog', function () {
    $blogs = Blog::latest()->paginate(10);

    return view('blog',compact('blogs'));
});
