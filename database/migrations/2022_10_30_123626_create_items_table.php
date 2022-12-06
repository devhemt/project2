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
        Schema::create('items', function (Blueprint $table) {
            $table->increments('prd_id');
            $table->integer('staff')->unsigned()->nullable();
            $table->string('demoimage',200);
            $table->string('name',150);
            $table->text('description');
            $table->float('price');
            $table->string('tag');
            $table->smallInteger('provided');
            $table->string('brand',100);
            $table->timestamps();
            $table->foreign('staff')
                ->references('user_id')->on('users')
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
        Schema::dropIfExists('items');
    }
};
