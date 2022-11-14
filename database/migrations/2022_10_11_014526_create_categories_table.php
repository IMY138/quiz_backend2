<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // id
            $table->string('name'); // カテゴリ名
            $table->string('thumbnail'); // サムネイル画像のファイルパス
            $table->integer('sort'); // 並び替え機能
            $table->timestamps(); // 作成日時、更新日時
            $table->softDeletes('deleted_at',0); // 削除日時
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
