<?php

use App\Http\Controllers\Dashboard\SettingController;
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
     return view('dashboard.index');
});


//  Route::prefix('dashboard')->group(function () {
//     Route::get('/settings', function () {
//         return view('dashboard.layouts.settings');;
//      })->name('dashboard.settings');

//  });


 Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
     Route::get('/settings', function () {
        return view('dashboard.settings');
    }
    )->name('settings');
    Route::post('/settings/update', [SettingController::class , 'update' ])->name('settings.update');
 });

