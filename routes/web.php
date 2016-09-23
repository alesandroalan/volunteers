<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'institucional'], function(){
    Route::group(['namespace' => 'Institucional'], function(){
        Route::get('sobre', ['as' => 'sobre', 'uses' => 'InstitucionalController@sobre']);
        Route::get('contato', ['as' => 'contato', 'uses' => 'InstitucionalController@contato']);
        Route::post('contato', ['as' => 'contato.send', 'uses' => 'InstitucionalController@contatoEnviado']);
    });
});

Route::resource('volunteer','VolunteersController');

/*Route::get('volunteer', function(){
    dd(App\Volunteer::find(1));
    //$v = App\Volunteer::find(1);
    //$v->name = "João";
    //$v->save();
    //return $v;
    //return view('volunteers.form');
});

Route::post('volunteer', ['as' => 'volunteer.send', function(){
    return Request::all();
}]);
*/

/*
| Route::group(['prefix' => 'institucional'], function(){
|   Route::get('sobre', ['as' => 'sobre', 'uses' => 'InstitucionalController@sobre']);
|
|   Route::get('contato', ['as' => 'contato', 'uses' => 'InstitucionalController@contato']);
|
|   Route::post('contato', ['as' => 'contato.send', 'uses' => 'InstitucionalController@contatoEnviado']);
| });
*/
/*Route::get('inicio/{nome?}', function ($nome = 'Aluno') {
    return view('inicio', ['nome' => $nome]);*/
   /* Variações
   * return view('inicio')->with('nome', $nome);
   * return view('inicio')->with(['nome' => $nome]);
   * return view('inicio')->withName($nome);
   */
/*})->where('nome','[A-Za-z]+');*/
