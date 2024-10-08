
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate ;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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



Route::group([ 'prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath',] ], function(){

    Route::get('/','HomeControler@new')->name('index')

    Route::get('/test2','HomeControler@test2')->name('index2')

});



