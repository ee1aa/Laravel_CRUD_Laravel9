<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Authorモデルを使用
use App\Models\Author;

class AuthorsController extends Controller
{
    //著者の登録処理
    public function authorCreate(Request $request)
    {
        //バリデ
        $request->validate([
            //入力必須|authorsテーブルのnameカラムに一意性あるか|最大10文字
            'authorName' => 'required|unique:authors,name|max:10',
        ]);

        //著者名を登録
        $name = $request->input('authorName');
        Author::create([
            'name' => $name
        ]);
        return back();
    }
}
