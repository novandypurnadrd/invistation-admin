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

//index
Route::get('/', 'invistation@login');


// Route::get('/{nama_undangan}', 'invistation@login');

//Profile
Route::put('signin', 'invistation@signin');
Route::get('logout', 'invistation@logout');
Route::get('lockscreen', 'invistation@lockscreen');
Route::put('signinfromlockscreen', 'invistation@signinfromlockscreen');
Route::get('profile', 'invistation@profile');


//dashboard
Route::get('dashboard', 'invistation@dashboard');


//orderin menu
Route::get('orderin', 'orderin@show');
Route::get('orderin/{order_id}', 'orderin@confirmed');
Route::put('orderin/update/{order_id}', 'orderin@update');
Route::put('orderin/view', 'orderin@view');


//orderconfirmed menu
Route::get('orderconfirmed', 'orderconfirmed@show');
Route::get('orderconfirmed/{order_id}', 'orderconfirmed@edit');
Route::put('orderconfirmed/update/{order_id}', 'orderconfirmed@update');
Route::put('orderconfirmed/view', 'orderconfirmed@view');


//project waiting menu
Route::get('projectwaiting', 'projectwaiting@show');
Route::get('projectwaiting/{project_id}', 'projectwaiting@edit');
Route::put('projectwaiting/update/{project_id}', 'projectwaiting@update');
Route::put('projectwaiting/view', 'projectwaiting@view');


//project on progress menu
Route::get('projectonprogres', 'projectonprogres@show');
Route::get('projectonprogres/{project_id}', 'projectonprogres@edit');
Route::put('projectonprogres/update/{project_id}', 'projectonprogres@update');
Route::put('projectonprogres/view', 'projectonprogres@view');


//project done menu
Route::get('projectdone', 'projectdone@show');
Route::get('projectdone/{project_id}', 'projectdone@edit');
Route::put('projectdone/update/{project_id}', 'projectdone@update');
Route::put('projectdone/view', 'projectdone@view');


//source
Route::get('source/{source_id}', 'source@show');


//Costumer Menu
Route::get('costumer/{id}', 'costumer@show');


//Template Web
Route::get('web_add', 'web@add');
Route::put('web_add_insert', 'web@insert');
Route::put('web/edit/{id}', 'web@update');
Route::get('web_show', 'web@show');
Route::get('/web/downloadfile/{file}', 'web@downloadfile');
Route::get('web/delete/{id}', 'web@delete');
Route::get('web/edit/{id}', 'web@edit');


//Template Grafis
Route::put('grafis_add_insert', 'grafis@insert');
Route::get('grafis_add', 'grafis@add');
Route::get('grafis_show', 'grafis@show');
Route::put('grafis/edit/{id}', 'grafis@update');
Route::get('/grafis/downloadfile/{file}', 'grafis@downloadfile');
Route::get('grafis/edit/{id}', 'grafis@edit');
Route::get('grafis/delete/{id}', 'grafis@delete');


//Template Video
Route::put('video_add_insert', 'video@insert');
Route::get('video_add', 'video@add');
Route::get('video_show', 'video@show');
Route::put('video/edit/{id}', 'video@update');
Route::get('video/edit/{id}', 'video@edit');
Route::get('video/delete/{id}', 'video@delete');



//Menu In & Out
Route::get('inout_in', 'inout@showIn');
Route::get('add_out', 'inout@add');
Route::put('insert_out', 'inout@insertOut');
Route::get('show_out', 'inout@showOut');
Route::put('inout/view_in', 'inout@view');
Route::put('inout/view_out', 'inout@viewOut');
Route::put('inout/report', 'inout@report');
Route::get('inout/openReport', 'inout@openReport');