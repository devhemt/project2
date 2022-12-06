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
        Schema::create('status', function (Blueprint $table) {
            $table->increments('status_id');
            $table->integer('invoice_id')->unsigned();
            $table->tinyInteger('status');
            $table->timestamps();
            $table->foreign('invoice_id')
                  ->references('invoice_id')->on('invoice')
                  ->onDelete('cascade');
        });
    }
//        0=bihuy 1=chuaxuly 2=daxacnhan 3=dangdonggoi 4=danggiaohang 5=giaohangthanhcong
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status');
    }
};
