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

Route::get('/', function () {
  return view('home');
})->name('home');

Route::get('/comics', function () {
  $arrayComics = config('comics');
  $arrayId = [];
  foreach($arrayComics as $key => $value){
    $value["id"] = $key;
    $arrayId[] = $value;
    // dump($value);
  }
  // dump($arrayId);
  return view('comics', ['chiave' => $arrayId]);
})->name('comics');

// Route::get('/prodotto', function () {
//   return view('prodotto');
// })->name('prodotto');


Route::get('/prodotto/{id?}', function ($id) {
  $arrayComics = config('comics');

  if($id >= 0 && $id < count($arrayComics)){
    $singoloFumetto = $arrayComics[$id];
    return view('prodotto', compact('singoloFumetto'));
  }
 
})->name('prodotto');





