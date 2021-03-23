<?php
namespace App\Http\Controllers;
use \Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
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


    Route::group([
        'prefix'=>LaravelLocalization::setLocale(),
        /*'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]*/
    ],function() {
        Route::group(['prefix'=>'donne'],function(){
                Route::get('creat',[AyoubController::class, 'creat']);
                Route::post('stor',[AyoubController::class,'stor']);

        });
});



