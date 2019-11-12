<?php

use App\User2;
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
    $t = '';
    if(Auth::check())
    {
        $t = Auth::user()->value('name').'您好';
    }
    return view('pages/home',['title'=>'- Home'],['name'=>$t]);
});


Route::get('about', function () {
    $t = '';
    if(Auth::check())
    {
        $t = Auth::user()->value('name').'您好';
    }
    return view('pages/about',['title'=>'- About me'],['name'=>$t]);
});

Route::get('service', function () {
    $t = '';
    if(Auth::check())
    {
        $t = Auth::user()->value('name').'您好';
    }
    return view('pages/service',['title'=>'- Service'],['name'=>$t]);
});

Route::get('history', function () {
    $t = '';
    if(Auth::check())
    {
        $t = Auth::user()->value('name').'您好';
    }
    return view('pages/history',['title'=>'- History'],['name'=>$t]);
});

Route::get('contact', function () {
    $t = '';
    if(Auth::check())
    {
        $t = Auth::user()->value('name').'您好';
    }
    return view('pages/contact',['title'=>'- Contact'],['name'=>$t]);
});

Route::get('joinmember', function () {
    $t = '';
    if(Auth::check())
    {
        $t = Auth::user()->value('name').'您好';
    }
    return view('pages/joinmember',['title'=>'- Joinmember'],['name'=>$t]);
});

Route::get('member', function () {
    $t = '';
    if(Auth::check())
    {
        $t = Auth::user()->value('name').'您好';
    }
    return view('pages/member',['title'=>'- member'],['name'=>$t]);
});

Route::get('login', function () {
    return view('pages/login',['title'=>'- Login'],['name'=>$t]);
});

Route::get('test', function () {
    return view('pages/test',['title'=>'- test'],['member'=>'']);
});

/*Route::get('test', ['middleware' => 'auth.basic', function () {
    return view('pages/test',['title'=>'- test'],['member'=>'']);
}]);*/


Route::get('sendvermail','WarningController@send');


Route::get('m', function(){
    $member = User2::where('id','1')->value('name');
    return view('pages/test',['title'=>'- test'],['member'=>$member]);
})->middleware('auth');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
