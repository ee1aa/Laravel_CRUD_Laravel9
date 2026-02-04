<?php

use App\Http\Controllers\AuthorsController;
use Illuminate\Support\Facades\Route;
//BooksControllerを使用
use App\Http\Controllers\BooksController;

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

//関数でルーティングする場合の例
// Route::get('/hello', function() {
//     echo 'Hello World !';
// });

//コントローラーのメソッドでルーティングする場合の例
Route::get('/hello', [BooksController::class, 'hello']);

//本のリスト一覧
Route::get('/index', [BooksController::class, 'index']);

//本の登録画面
Route::get('/create-form', [BooksController::class, 'createForm']);

//著者の登録処理
Route::post('/author/create', [AuthorsController::class, 'authorCreate']);

//本（著者・タイトル・金額）の登録
Route::post('/book/create', [BooksController::class, 'bookCreate']);
