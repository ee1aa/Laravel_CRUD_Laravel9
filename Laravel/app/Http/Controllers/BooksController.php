<?php

namespace App\Http\Controllers;
//Bookモデルを使用
use App\Models\Book;
//Authorモデルを使用
use App\Models\Author;

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

    //登録画面の表示
    public function createForm()
    {
        //Authorモデル（authorsテーブル）からレコード情報を取得
        $authors = Author::get();
        //上記変数を第二引数でbladeに渡す
        return view('books.createForm', ['authors' => $authors]);
    }

    //本（著者・タイトル・金額）の登録
    public function bookCreate(Request $request)
    {
        $author_id = $request->input('author_id');
        $title = $request->input('title');
        $price = $request->input('price');

        book::create([
            'author_id' => $author_id,
            'title' => $title,
            'price' => $price
        ]);
        return redirect('/index');
    }
}
