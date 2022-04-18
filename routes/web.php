<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserController;
use App\Http\Controllers\AddProveedor;
use App\Http\Controllers\ShowPanel;

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
});

Route::get('/proveedores', function () {
   //return view('home');
   
});

Route::get('/boot', function () {
    return view('boot');
});

Route::get('/add-proveedor-welcome', [AddProveedor::class, 'create']);
Route::get('/panel', [ShowPanel::class, 'show']);

//Route::post('ajax-request', 'AddProveedor@store');
