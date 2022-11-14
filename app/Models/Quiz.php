<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    // このクイズを所有するタイトルを取得する
    public function title()
    {
        return $this->belongsTo('App\Models\Title');
    }
}
