<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\TaskController;
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

/**
 * Group route use chang language
 */
Route::middleware(['locale'])->group(function () {

    /**
     * Resource route for tasks
     */
    Route::resource('tasks', TaskController::class);

    /**
     * Route use to change language user
     */
    Route::get('change-language/{language}', [LocaleController::class, 'changeLanguage'])->name('user.change-language');
});
