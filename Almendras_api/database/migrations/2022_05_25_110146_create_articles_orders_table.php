<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('article');
            $table->unsignedInteger('order');
            $table->foreign('article')->references('code')->on('articles');
            $table->foreign('order')->references('code')->on('orders');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_orders');
    }
}
