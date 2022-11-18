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
        Schema::create('detail_invoice', function (Blueprint $table) {
            $table->increments('dtliv_id');
            $table->integer('itemsid')->unsigned();
            $table->integer('invoice_id')->unsigned();
            $table->string('size',20);
            $table->string('color',20);
            $table->smallInteger('amount');
            $table->float('price_one');
            $table->float('cost_one');
            $table->timestamps();
            $table->foreign('itemsid')
                  ->references('prd_id')->on('items')
                  ->onDelete('cascade');
            $table->foreign('invoice_id')
                  ->references('invoice_id')->on('invoice')
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
        Schema::dropIfExists('detail_invoice');
    }
};
