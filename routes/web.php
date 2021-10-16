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
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/archives/', function() {
    return view('archives.index');
});

Route::get('/archives/{category}/', function($category) {
    return view('archives.category', ['category'=>$category]);
});

Route::post('/join/', function() {
    return '入会申し込み完了';
});

// 順番が大事
Route::get('/join/', function() {
    return redirect()->to('/');
});


// https://qiita.com/tamakiiii/items/e71040173fa0a1fcad83：コントローラー設定
Route::get('/sum/{x}/{y}', 'App\Http\Controllers\MathController@sum');

Route::get('/entries/', 'App\Http\Controllers\EntriesController@index');

Route::get('/{id}/', function($id) {
    return $id . 'のページ';
});