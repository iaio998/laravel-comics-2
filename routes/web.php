<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('comics', ComicController::class);

// Route::get('/comics', function () {
//     $product = config('my-comics.comics');
//     $hyper = config('my-menu.menu');
//     return view('comics.index', compact('product', 'hyper'));
// })->name('comics.index');

// Route::get('/comics/{index}', function ($index) {
//     $comics = config('my-comics.comics');
//     $hyper = config('my-menu.menu');
//     if ($index >= 0 && $index < count($comics)) {
//         $product = $comics[$index];
//         return view('comics.show', compact('product', 'hyper'));
//     } else {
//         abort(404);
//     }
// })->name('pages.show');