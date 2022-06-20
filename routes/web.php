<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('MainPage');
// });
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
route::post("add_artical", [HomeController::class, 'addArticle'])->name('add_artical')->middleware('auth');
route::get("/", [HomeController::class, 'getArticle'])->name('get_article');
route::get("all_articles", [HomeController::class, "AllArticles"])->name("all_articles");

// use Illuminate\Support\Facades\App;


// Route::prefix('{locale?}')->group(function ($locale) {

//     error_log("" . gettype($locale));
//     Route::get('test', function () {
//         return  App::currentLocale();
//     });
// });

// Route::get('/greeting/{locale}', function ($locale) {
//     if (!in_array($locale, ['en', 'ar', 'fr'])) {
//         abort(400);
//     }
//     // App::setLocale($locale);
//     // return $locale = App::currentLocale();


//     //
// });