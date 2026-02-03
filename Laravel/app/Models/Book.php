<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    //リレーション定義
    //「1対多」の「1」側とはリレーション関係にあることを記述
    public function author()
    {
        //訳：このモデル(=Book)が扱うデータはAuthorモデルが扱うデータに属する
        return $this->belongsTo('App\Models\Author');
    }
}
