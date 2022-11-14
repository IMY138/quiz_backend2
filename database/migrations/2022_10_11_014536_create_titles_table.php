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
        Schema::create('titles', function (Blueprint $table) {
            $table->id(); // id
            $table->integer('category_id'); // 所属するカテゴリ
            $table->string('title'); // クイズのタイトル名
            $table->text('description'); // クイズタイトルの説明
            $table->string('thumbnail'); // サムネイル画像のファイルパス
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
        Schema::dropIfExists('titles');
    }
};
