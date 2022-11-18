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
        Schema::create('invoice_noacc', function (Blueprint $table) {
            $table->increments('invoice_id');
            $table->integer('cusid')->unsigned();
            $table->float('pay');
            $table->float('cost_pay');
            $table->timestamps();
            $table->foreign('cusid')
                  ->references('cus_id')->on('customer_noacc')
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
        Schema::dropIfExists('invoice_noacc');
    }
};
