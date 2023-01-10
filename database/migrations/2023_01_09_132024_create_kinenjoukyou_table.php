<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKinenjoukyouTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kinenjoukyou', function (Blueprint $table) {
            $table->id('login_id')->comment('ログインid');
            $table->date('price_cigarettes')->comment('たばこ1箱の金額');
            $table->date('oneday_cigarettes')->comment('1日に吸うたばこの本数');
            $table->text('goal')->comment('目標');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kinenjoukyou');
    }
}
