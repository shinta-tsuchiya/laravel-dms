<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// リレーションの追加
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    public function user(): BelongsTo // 戻り値の型を宣言
    {
        /**
         * $this Documentクラスのインスタンス自身
         * belongsTo メソッドの引数には関係するモデルの名前を文字列で渡す
         */
        return $this->belongsTo('App\User');
    }
}
