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


Route::get('lang/{locale}', 'LocalizationController@index');

Route::get('/','PagesController@home')->name('home');

Route::get('/aboutus','PagesController@aboutus')->name('aboutus');

Route::get('/services', 'PagesController@services')->name('services');

Route::get('/emprunt','PagesController@emprunt')->name('emprunt');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::post('/contact/send', 'SendEmailController@send')->name('send');

Route::post('/invest/send', 'SendInvestController@send')->name('investmail');

Route::post('/retrait/send', 'SendRetraitController@send')->name('retraitmail');
Route::post('/retraitbenef/send', 'SendBeneficeController@send')->name('benefmail');

Route::get('/investir','PagesController@investir')->name('investir');

Route::get('/start',function()
{
    return view('pages.form_emprunt');
});
Route::delete('/posts/{id}','AdminController@destroy')->name('deleteavis');
Route::delete('/users/{id}','AdminController@destroyuser')->name('delete');

Route::get('/more','PagesController@more')->name('more');
Route::get('/files','PagesController@files')->name('files');

Route::resource('/user','UserController');

/*Routes pour le formulaire de damande d'emprunt*/

//Route::get('/mail', 'EmpruntController@mail');
Route::get('/family', 'EmpruntController@famille')->name('family');
Route::get('/logement', 'EmpruntController@logement')->name('logement');
Route::get('/activity', 'EmpruntController@activity')->name('activity');
Route::get('/personal', 'EmpruntController@personnel')->name('personal');
Route::get('/info', 'EmpruntController@coordonnee')->name('info');

/*Routes pour post le formulaire de demande d'emprunt*/
Route::post('/project', 'EmpruntController@postProjet');
Route::post('/mail/{id}', 'EmpruntController@postMail');
Route::post('/family/{id}', 'EmpruntController@postFamille');
Route::post('/logement/{id}', 'EmpruntController@postLogement');
Route::post('/activity/{id}', 'EmpruntController@postActivity');
Route::post('/personal/{id}', 'EmpruntController@postPersonnel');
Route::post('/position/{id}', 'EmpruntController@postCoordonnee');

/* Fin */

/* Route d'authentification*/
Auth::routes();

// Route::get('/avis','AvisController@index')->name('avis');

Route::get('/post','PostController@index')->name('posts');

Route::put('/updateprofil','UserUpdateController@update')->name('updateprofil');

Route::get('/users', 'AdminController@users')
->middleware('is_admin')
->name('tables');

Route::get('/leursavis','AdminController@avis')
->middleware('is_admin')
->name('avisclient');

Route::get('/usersmanage','AdminController@manage')
->middleware('is_admin')
->name('manage');

Route::get('/admin', 'AdminController@index')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/myaccount', 'HomeController@index')->name('userhome');

Route::put('/modify', 'UserController@update')->name('modify');

Route::get('/invest', 'UserDashboardController@invest')->name('invest');
Route::get('/retrait', 'UserDashboardController@retrait')->name('retrait');
Route::get('/benef', 'UserDashboardController@benefice')->name('benefice');
Route::get('/profil', 'UserDashboardController@profil')->name('profil');
Route::get('/bestinvest', 'UserDashboardController@bestinvest')->name('bestinvest');
Route::resource('/posts', 'PostController', ['except' =>['show', 'edit', 'update']]);

// Route::get('/invest', 'UserDashboardController@update')->name('invest');


// Route::get('/verify-user/{code}', 'RegisterController@activateUser')->name('activate.user');
