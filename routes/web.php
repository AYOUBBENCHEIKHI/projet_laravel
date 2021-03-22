<?php
namespace App\Http\Controllers;
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

Route::get('/',[Controller::class,'vie']);
Route::get('base',[AyoubController::class,'tablebase']);

Route::group(['prefix'=>'donne'],function(){
    //Route::get('stor',[AyoubController::class,'stor']);
    Route::get('creat',[AyoubController::class,'creat']);
   // Route::get('return',[AyoubController::class,'stor']);
    Route::post('stor',[AyoubController::class,'stor'])->name('donne.stor');
});



