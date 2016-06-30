<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ecir', function () {
    return view('ecir');
});

Route::get('/hb', function () {
    return view('hb');
});

Route::get('/pa', function () {
    return view('pa');
});


Route::get('/5Pay10', function () {
    return view('5pay10');
});
Route::get('/8Pay20', function () {
    return view('8pay20');
});
Route::get('/15Pay25', function () {
    return view('15pay25');
});
Route::get('/15Pay30', function () {
    return view('15pay30');
});
Route::get('/excellent', function () {
    return view('excellent');
});
Route::get('/10For80', function () {
    return view('10for80');
});







Route::get('/15PayLife', function () {
    return view('15paylife');
});
Route::get('/20PayLife', function () {
    return view('20paylife');
});
Route::get('/LifeGift', function () {
    return view('lifegift');
});



Route::get('/H&S', function () {
    return view('H&S');
});
Route::get('/H&S_PlusGold', function () {
    return view('H&S_PlusGold');
});
Route::get('/H&S_Junior', function () {
    return view('H&S_Junior');
});




Route::get('/GPA-Continental', function () {
    return view('group/GPA-Continental');
});
Route::get('/5up', function () {
    return view('group/5up');
});
Route::get('/20up', function () {
    return view('group/20up');
});
Route::get('/50up', function () {
    return view('group/50up');
});



Route::get('/Family', function () {
    return view('package/FamilyShield');
});
Route::get('/Lady', function () {
    return view('package/LadyShield');
});
Route::get('/HealthLifetimeJunior', function () {
    return view('package/HealthLifetimeJunior');
});
Route::get('/HealthLifetimeAdult', function () {
    return view('package/HealthLifetimeAdult');
});
Route::get('/HealthGuard', function () {
    return view('package/HealthGuard');
});
Route::get('/HealthyLiving', function () {
    return view('package/HealthyLiving');
});
Route::get('/20PayLifePackage', function () {
    return view('package/20PayLifePackage');
});



Route::get('/AnnuitySmart', function () {
    return view('annuity/AnnuitySmart');
});
Route::get('/AnnuityFIX', function () {
    return view('annuity/AnnuityFIX');
});
Route::get('/Annuity60-85', function () {
    return view('annuity/Annuity60-85');
});





Route::resource('/api/contact', 'ContactController@insertContact');


Route::post('/send', 'EmailController@send');