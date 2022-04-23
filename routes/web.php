<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Route Home
|--------------------------------------------------------------------------
*/
Route::get('/painel', 'Web\PainelController@index')->name('painel');

Route::get('/', 'Web\HomeController@index')->name('home');
/*
|--------------------------------------------------------------------------
| Redes Sociais
|--------------------------------------------------------------------------
*/
Route::post('ajax/social/follow', 'Web\SocialController@follow');
Route::post('ajax/social/share', 'Web\SocialController@share');
Route::get('social/share/{network}/{id}', 'Web\SocialController@detail')->name('social-detail');
/*
|--------------------------------------------------------------------------
| Share Whatsapp
|--------------------------------------------------------------------------
*/
//Route::post('ajax/share/whatsapp', 'Web\WhatsappController@share');
Route::post('ajax/comment/whatsapp', 'Web\WhatsappController@comment')->name('comment.whatsapp');
/*
|--------------------------------------------------------------------------
| Redirect Product
|--------------------------------------------------------------------------
*/
Route::get('comprar/produto/{id}', 'Web\ProductControll@redirect')->name('product-detail');
Route::post('ajax/product/{id}', 'Web\ProductControll@store')->name('product-store');

// Tests
Route::get('test-select', function () {
    return view('tests.select-state');
});

Route::get('test-iframe', function () {
    return view('tests.iframe');
});

Route::get('test-facebook', function () {
    return view('tests.facebook');
});


Route::get('test-instagram', function () {
        return view('tests.instagram');
});


