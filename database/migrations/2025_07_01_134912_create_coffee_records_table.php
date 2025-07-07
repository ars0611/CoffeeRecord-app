<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffeeRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffee_records', function (Blueprint $table) {
            $table->id(); // 主キー
            $table->string('bean_name'); // 豆の名前
            $table->string('roast_level'); // 焙煎度
            $table->string('grind_level'); // 挽き目
            $table->integer('bean_amount'); // 豆の量
            $table->integer('water_amount'); // 湯量
            $table->integer('brew_sec'); // 抽出時間
            $table->integer('interval_sec'); // 抽出間隔
            $table->string('flavor'); // 味わい
            $table->integer('rating'); // 評価
            $table->string('impression'); // 感想
            $table->timestamps(); // 投稿・更新日時
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coffee_records');
    }
}
