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
            $table->id();
            $table->integer('number_of_cigarettes_guit');
            $table->integer('money');
            $table->timestamps('ciggrettes_guit_day');
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
