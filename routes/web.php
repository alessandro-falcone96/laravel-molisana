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

    $data = config('paste');

    $lunga = [];
    $corta = [];
    $cortissima = [];
    
    foreach ($data as $key => $tipoPasta) {
        $tipoPasta['id'] = $key;
        if ($tipoPasta['tipo'] == 'lunga') {
            $lunga[] = $tipoPasta;
        } elseif ($tipoPasta['tipo'] == 'corta') {
            $corta[] = $tipoPasta;
        } elseif ($tipoPasta['tipo'] == 'cortissima') {
            $cortissima[] = $tipoPasta;
        }
    }


    
    return view('home', [
        'lunghe' => $lunga,
        'corte' => $corta,
        'cortissime' => $cortissima
    ]);
})->name('homepage');

Route::get('/product/{id}', function($id) {

    $data = config('paste');

    if ($id >= count($data)) {
        abort(404);
    }

    $pasta = $data[$id];

    return view('product', [
        'pasta' => $pasta
    ]);
})->where('id', '[0-9]+')->name('product');

Route::get('/news', function() {

    return view('news');
    })->name('news');