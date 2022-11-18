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
        Schema::create('batch_price', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prdid')->unsigned();
            $table->tinyInteger('batch');
            $table->smallInteger('batch_amount');
            $table->float('cost');
            $table->timestamps();
            $table->foreign('prdid')
                  ->references('prd_id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batch_price');
    }
};
