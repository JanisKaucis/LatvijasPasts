<?php

use App\Http\Controllers\AllCVController;
use App\Http\Controllers\CreateCVController;
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

Route::get('/', [CreateCVController::class, 'createCVShow'])->name('create');
Route::post('/', [CreateCVController::class, 'createCVStore'])->name('create');
Route::get('/view', [AllCVController::class, 'allCVShow'])->name('view');
Route::post('/view', [AllCVController::class, 'allCVManage'])->name('view');
