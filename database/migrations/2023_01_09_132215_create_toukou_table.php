<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToukouTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toukou', function (Blueprint $table) {
            $table->id('login_id')->comment('ログインid');
            $table->id('toukou_id')->comment('投稿id');
            $table->text('content')->comment('投稿内容');
            $table->datetime('created_at')->comment('投稿日時');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toukou');
    }
}
