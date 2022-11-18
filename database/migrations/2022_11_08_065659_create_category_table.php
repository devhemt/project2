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
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prdid')->unsigned();
            $table->tinyInteger('categories');
            $table->timestamps();
            $table->foreign('prdid')
                  ->references('prd_id')->on('items')
                  ->onDelete('cascade');
        });

        // categories(1=men,2=women,3=kid,4=accessories)
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
};
