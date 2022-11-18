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
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('itemsid')->unsigned();
            $table->integer('cus_id')->unsigned();
            $table->text('comment');
            $table->timestamps();
            $table->foreign('itemsid')
                  ->references('prd_id')->on('items')
                  ->onDelete('cascade');
            $table->foreign('cus_id')
                  ->references('cus_id')->on('customer')
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
        Schema::dropIfExists('commets');
    }
};
