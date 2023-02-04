<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;

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

Route::get('/', [ListController::class,"acceuillir"]);
route::get('/valider',[ListController::class,"envoyerdanslabd"]);
Route::get('/ajouter', [ListController::class,"afficherlavueajouter"]);
route::get('/observer',[ListController::class,"observerlavuedevalidation"]);
