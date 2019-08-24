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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//BREAST
//=====================================================================================
//=====================================================================================
//Breast Invasive Resection Route

Route::get('/breast_invasive_resection', function() {
    return view('breast_invasive_resection');
});

//=====================================================================================
//=====================================================================================
//Breast DCIS, Biopsy Route

Route::get('/brest_dcis_biopsy', function() {
    return view('brest_dcis_biopsy');
});

//=====================================================================================
//=====================================================================================
//Breast DCIS, Resection Route

Route::get('/brest_dcis_resection', function() {
    return view('brest_dcis_resection');
});

//=====================================================================================
//=====================================================================================
//Preview Route

Route::get('/preview_bir', function() {
    return view('preview_bir');
});

//=====================================================================================
//=====================================================================================
//BIR Preview Route

Route::post('/bir-preview', [
    'uses' => 'HomeController@birPreview',
    'as' => 'bir.preview',
]);

//=====================================================================================
//=====================================================================================

//HEAD AND NECK
//=====================================================================================
//=====================================================================================
//Major Salivary GLand Route
Route::get('/major_salivary_glands', function() {
    return view('major_salivary_glands');
});
//------------------------------------------------------------------------------------
Route::get('/preview_msg', function() {
    return view('preview_msg');
});
//------------------------------------------------------------------------------------
Route::post('/msg-preview', [
    'uses' => 'HomeController@msgPreview',
    'as' => 'msg.preview',
]);
//-----------------------------------------------------------------------------------
//Larynx  Route
Route::get('/larynx', function() {
    return view('larynx');
});
//------------------------------------------------------------------------------------
Route::get('/preview_lyx', function() {
    return view('preview_lyx');
});
//------------------------------------------------------------------------------------
Route::post('/lyx-preview', [
    'uses' => 'HomeController@lyxPreview',
    'as' => 'lyx.preview',
]);
//-----------------------------------------------------------------------------------
// Lip and Oral Cavity Route
Route::get('/lip_oral_cavity', function() {
    return view('lip_oral_cavity');
});
//------------------------------------------------------------------------------------
Route::get('/preview_loc', function() {
    return view('preview_loc');
});
//------------------------------------------------------------------------------------
Route::post('/loc-preview', [
    'uses' => 'HomeController@locPreview',
    'as' => 'loc.preview',
]);
//-----------------------------------------------------------------------------------
// Pharynx Route
Route::get('/pharynx', function() {
    return view('pharynx');
});
//------------------------------------------------------------------------------------
Route::get('/preview_phx', function() {
    return view('preview_phx');
});
//------------------------------------------------------------------------------------
Route::post('/phx-preview', [
    'uses' => 'HomeController@phxPreview',
    'as' => 'phx.preview',
]);


//GASTROINTESTINAL TRACT
//=====================================================================================
//=====================================================================================
//Colon and Rectum Excisional Biopsy Route
Route::get('/colon_rectum_excisional', function() {
    return view('colon_rectum_excisional');
});
//-------------------------------------------------------------------------------------
Route::get('/preview_cre', function() {
    return view('preview_cre');
});
//-------------------------------------------------------------------------------------
Route::post('/cre-preview', [
    'uses' => 'HomeController@crePreview',
    'as' => 'cre.preview',
]);
//-------------------------------------------------------------------------------------
//Colon and Rectum Excisional Biopsy Route
Route::get('/colon_rectum_resection', function() {
    return view('colon_rectum_resection');
});
//-------------------------------------------------------------------------------------
Route::get('/preview_crr', function() {
    return view('preview_crr');
});
//-------------------------------------------------------------------------------------
Route::post('/crr-preview', [
    'uses' => 'HomeController@crrPreview',
    'as' => 'crr.preview',
]);
//-------------------------------------------------------------------------------------
//Pancreas (Exocrine) Route
Route::get('/pancreas_exocrine', function() {
    return view('pancreas_exocrine');
});
//-------------------------------------------------------------------------------------
Route::get('/preview_pee', function() {
    return view('preview_pee');
});
//-------------------------------------------------------------------------------------
Route::post('/pee-preview', [
    'uses' => 'HomeController@peePreview',
    'as' => 'pee.preview',
]);
//-------------------------------------------------------------------------------------
//Stomach Route
Route::get('/stomach', function() {
    return view('stomach');
});
//-------------------------------------------------------------------------------------
Route::get('/preview_pee', function() {
    return view('preview_sth');
});
//-------------------------------------------------------------------------------------
Route::post('/sth-preview', [
    'uses' => 'HomeController@sthPreview',
    'as' => 'sth.preview',
]);
