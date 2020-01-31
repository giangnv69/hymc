<?php

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
Route::group(['middleware' => 'locale'], function() {
    Route::get('/', ['as' => 'home.index', 'uses' => 'IndexController@getHome']);
    Route::get('change-language/{lang}', ['as'=>'home.swich.lang', 'uses'=>'IndexController@getChangeLanguage']);

    Route::get('sign-up', ['as'=>'home.sign-up', 'uses'=>'IndexController@getSignUp']);
    
    Route::post('sign-up', ['as'=>'home.sign-up.post', 'uses'=>'IndexController@postSingUp']);

    Route::get('log-out', ['as'=>'home.log-out', 'uses'=>'IndexController@getLogOut']);

    Route::get('sign-in', ['as'=>'home.log-in', 'uses'=>'IndexController@getLogin']);
    Route::post('sign-in', ['as'=>'home.sign-in.post', 'uses'=>'IndexController@postLogin']);


    Route::get('trading', ['as'=>'home.trading', 'uses'=>'IndexController@getTrading']);
    Route::get('about', ['as'=>'home.about', 'uses'=>'IndexController@getAbout']);


});

Route::group(['namespace' => 'Admin'], function () {

    Route::group(['prefix' => 'backend', 'middleware' => 'auth'], function () {

        Route::get('/home', ['as' => 'backend.index', 'uses' => 'IndexController@getHome']);
        Route::resource('user', 'UserController', ['except' => [
            'show'
        ]]);

        Route::resource('slider', 'ImageController', ['except' => [
            'show'
        ]]);

        Route::group(['prefix' => 'setting'], function () {
            Route::get('/', ['as' => 'setting.get', 'uses' => 'SettingController@getSetting']);
            Route::post('/', ['as' => 'setting.post', 'uses' => 'SettingController@postSetting']);

            Route::get('/social', ['as' => 'social.get', 'uses' => 'SettingController@getSocial']);
            Route::post('/social', ['as' => 'social.post', 'uses' => 'SettingController@postSocial']);

        });

        Route::group(['prefix' => 'developer'], function () {
            Route::get('/ck-finder', ['as' => 'developer.finder', 'uses' => 'TestController@getCKFinder']);
            Route::get('/get-row', ['as' => 'developer.get-row', 'uses' => 'TestController@getRow']);
        });

        Route::get('/get-layout', ['as' => 'get.layout', 'uses' => 'IndexController@getLayout']);

        Route::group(['prefix' => 'menu'], function () {
            Route::get('/', ['as' => 'setting.menu', 'uses' => 'MenuController@getListMenu']);
            Route::get('edit/{id}', ['as' => 'backend.config.menu.edit', 'uses' => 'MenuController@getEditMenu']);
            Route::post('add-item/{id}', ['as' => 'setting.menu.addItem', 'uses' => 'MenuController@postAddItem']);
            Route::post('update', ['as' => 'setting.menu.update', 'uses' => 'MenuController@postUpdateMenu']);
            Route::get('delete/{id}', ['as' => 'setting.menu.delete', 'uses' => 'MenuController@getDelete']);
            Route::get('edit-item/{id}', ['as' => 'setting.menu.geteditItem', 'uses' => 'MenuController@getEditItem']);
            Route::post('edit', ['as' => 'setting.menu.editItem', 'uses' => 'MenuController@postEditItem']);
        });

        Route::group(['prefix' => 'pages'], function () {
            Route::get('/', ['as' => 'pages.list', 'uses' => 'PagesController@getListPages']);
            Route::get('build', ['as' => 'pages.build', 'uses' => 'PagesController@getBuildPages']);
            Route::post('build', ['as' => 'pages.build.post', 'uses' => 'PagesController@postBuildPages']);
            Route::post('/create', ['as' => 'pages.create', 'uses' => 'PagesController@postCreatePages']); 
        });

        Route::group(['prefix' => 'widget'], function () {
            Route::get('/', ['as' => 'widget.get', 'uses' => 'SettingController@getWidget']);
            Route::post('/', ['as' => 'widget.get.post', 'uses' => 'SettingController@postWidget']); 
        });
    });
});

Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
//Auth::routes();
