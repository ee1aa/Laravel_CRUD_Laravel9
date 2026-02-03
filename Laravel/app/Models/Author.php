<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    //リレーション定義
    //「1対多」の「多」側とはリレーション関係にあることを記述
    public function books()
    {
        //訳：このモデル(=Author)が扱うデータはBookモデルが扱うデータを複数持つことができる
        return $this->hasMany('App\Models\Book');
    }
}
