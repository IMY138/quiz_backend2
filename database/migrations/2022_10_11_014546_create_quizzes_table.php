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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id(); // id
            $table->integer('title_id'); // 所属するクイズタイトル
            $table->string('question'); // 問題
            $table->string('answer1'); // 選択肢Ａ
            $table->string('answer2'); // 選択肢Ｂ
            $table->string('answer3'); // 選択肢Ｃ
            $table->string('answer4'); // 選択肢Ｄ
            $table->string('answer'); // １,２,３,４
            $table->text('description'); // 回答後の説明
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
        Schema::dropIfExists('quizzes');
    }
};
