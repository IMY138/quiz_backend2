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
        Schema::create('answer_histories', function (Blueprint $table) {
            $table->id(); // id
            $table->integer('quiz_id'); // quizテーブルのid
            $table->string('answer'); // ユーザの回答（１,２,３,４の内のどれか）
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
        Schema::dropIfExists('answer_histories');
    }
};
