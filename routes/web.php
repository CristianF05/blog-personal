<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Postcontroller;

use App\Http\Controllers\Post2controller;

use App\Http\Controllers\Post3controller;

use App\Http\Controllers\Post4controller;

use App\Http\Controllers\Post5controller;



Route::get('/', function () {

  return view('welcome');

});



Route::get('/ruta_1', [Postcontroller::class, 'index' ]);

Route::get('/ruta_2', [Post2controller::class, 'index' ]);

Route::get('/ruta_3', [Post3controller::class, 'index' ]);

Route::get('/ruta_4', [Post4controller::class, 'index' ]);

Route::get('/ruta_5', [Post5controller::class, 'index' ]);