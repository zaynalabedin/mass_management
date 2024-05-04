<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashbord', [admin::class, 'dashbord_show']);
Route::post('/namesub', [admin::class, 'namesub']);

Route::get('/mill', [admin::class, 'mill_show']);
Route::get('/milledit/{id}', [admin::class, 'mill_edit']);
Route::post('/millsub', [admin::class, 'mill_sub']);

Route::get('/market', [admin::class, 'market_show']);
Route::get('/marketedit/{id}', [admin::class, 'market_edit']);
Route::post('/marketsub', [admin::class, 'market_sub']);
