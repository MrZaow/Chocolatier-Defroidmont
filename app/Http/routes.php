<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web', 'localize'], 'prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', ['as' => 'home', function () {
        return view('home');
    }]);

    Route::get(LaravelLocalization::transRoute('routes.products'), ['as' => 'products',function(){
        return view('products');
    }]);

    Route::get(LaravelLocalization::transRoute('routes.order'), ['as' => 'order',function(){
        return view('order');
    }]);

    Route::get(LaravelLocalization::transRoute('routes.shops'), ['as' => 'shops',function(){
        return view('shops');
    }]);

    Route::get(LaravelLocalization::transRoute('routes.museum'), ['as' => 'museum',function(){
        return view('museum');
    }]);

    Route::get(LaravelLocalization::transRoute('routes.gallery'), ['as' => 'easter',function(){
        return view('gallery');
    }]);

    Route::get(LaravelLocalization::transRoute('routes.infos'), ['as' => 'infos',function(){
        return view('infos');
    }]);

    Route::get(LaravelLocalization::transRoute('routes.ballotins'), ['as' => 'ballotins',function(){
        return view('ballotins');
    }]);

    Route::get(LaravelLocalization::transRoute('routes.bloc_nature'), ['as' => 'bloc_nature',function(){
        return view('bloc-nature');
    }]);

    Route::get(LaravelLocalization::transRoute('routes.bloc_fruit'), ['as' => 'bloc_fruit',function(){
        return view('bloc-fruit');
    }]);

    Route::get(LaravelLocalization::transRoute('routes.tablette_brisure'), ['as' => 'tablette_brisure',function(){
        return view('tablette-brisure');
    }]);

    Route::get(LaravelLocalization::transRoute('routes.tablettes_origine'), ['as' => 'tablettes_origine',function(){
        return view('tablettes-origine');
    }]);

    Route::get(LaravelLocalization::transRoute('routes.batons_fourres'), ['as' => 'batons_fourres',function(){
        return view('batons-fourres');
    }]);

    Route::get(LaravelLocalization::transRoute('routes.pate'), ['as' => 'pate',function(){
        return view('pate');
    }]);

    Route::get(LaravelLocalization::transRoute('routes.the'), ['as' => 'the',function(){
        return view('the');
    }]);
});