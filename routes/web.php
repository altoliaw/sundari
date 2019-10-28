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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('pages/home',['title'=>'- Home']);
});


Route::get('about', function () {
    return view('pages/about',['title'=>'- About me']);
});

Route::get('service', function () {
    return view('pages/service',['title'=>'- Service']);
});

Route::get('history', function () {
    return view('pages/history',['title'=>'- History']);
});

Route::get('contact', function () {
    return view('pages/contact',['title'=>'- Contact']);
});

Route::get('joinmember', function () {
    return view('pages/joinmember',['title'=>'- Joinmember']);
});

Route::get('vip', function () {
    return view('pages/vip',['title'=>'- VIP']);
});

Route::get('login', function () {
    return view('pages/login',['title'=>'- Login']);
});