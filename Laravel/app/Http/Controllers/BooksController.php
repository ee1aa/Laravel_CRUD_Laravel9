<?php

namespace App\Http\Controllers;
//Bookモデルを使用
use App\Models\Book;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function hello()
    {
        echo 'hello world!<br>';
        echo 'コントローラーを使ったルーティング成功です。';
    }

    //本の一覧リスト
    public function index()
    {
        $books = Book::get(); //Bookモデル（=booksテーブル）::レコード取得命令

        //view（Bladeファイルの場所.名前, 渡すデータ, 追加オプション）
        return view('books.index', ['books' => $books]);
        //['books'(Bladeでの変数名) => $books(Controllerでの変数名)]
        // ↪compact('books')でControllerでの変数名がそのままBladeでの変数名になる
    }
}
