<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iine', function (Blueprint $table) {
            $table->id('login_id')->comment('ログインid');
            $table->action('iine')->comment('いいね');
            $table->id('toukou_id')->comment('投稿id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iine');
    }
}
