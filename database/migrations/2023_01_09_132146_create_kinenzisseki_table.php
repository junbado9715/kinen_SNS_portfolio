<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKinenzissekiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kinenzisseki', function (Blueprint $table) {
            $table->id('login_id')->comment('ログインid');
            $table->date('number_of_cigarettes_guit')->comment('禁煙した本数');
            $table->date('money')->comment('金額');
            $table->date('ciggrettes_guit_day')->comment('禁煙した日数');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kinenzisseki');
    }
}
