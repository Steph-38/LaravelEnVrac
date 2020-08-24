<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

   WARNING Les routes sont analysée dans leur ordre
|
*/

Route::get('/', 'WelcomeController@index')->name('home');

Route::get('test', function () {
    return response('un test', 206)->header('Content-Type', 'text/plain');
});

Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');

Route::get('users', 'UsersController@create');
Route::post('users', 'UsersController@store');

Route::get('article/{n}', 'ArticleController@show')
    ->where('n', '[0-9]')
    ->name('article');

Route::get('/test-contact', function () {
    return new App\Mail\Contact([
        'name' => 'Durand',
        'email' => 'durand@chezlui.com',
        'message' => 'Je voulais vous dire que votre site est magnifique !'
        ]);
});

// paramètre optionel mais valeur par défaut obligatoire
Route::get('/test{n?}', function ($n = 1) {
    return 'Je suis sur la page ' . $n;
// Regex pour les valeurs attendues
})->where('n', '[1-9]')
// renomme la route
->name('caca');

Route::get('facture/{n}', function ($n) {
    return view('facture')->withNumero($n);
})->where('n','[1-9]+');

Route::get('photo', 'PhotoController@create');
Route::post('photo', 'PhotoController@store');
