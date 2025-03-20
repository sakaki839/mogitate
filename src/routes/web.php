<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

// ute::get('/', function () {
    // return viRoew('welcome');
// });
Route::get('/', [ContactController::class, 'products']);
// Route::get('./', [ContactController::class, 'register']);

Route::get('/register', [ContactController::class, 'register']);
// Route::post('/register', [ContactController::class, 'register']);

Route::get('/productId', [ContactController::class, 'productId']);