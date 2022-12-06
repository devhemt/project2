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
        Schema::create('total_property', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('itemsid')->unsigned();
            $table->string('sizes',20);
            $table->string('colors',20);
            $table->timestamps();
            $table->foreign('itemsid')
                  ->references('prd_id')->on('items')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nature1');
    }
};
