<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('category_id')->unsigned();
            $table->text('title');
            $table->longText('description');
            $table->string('model')->nullable();
            $table->string('brand')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('type')->nullable();
            $table->string('space')->nullable();
            $table->float('price');
            $table->bigInteger('phone');
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
        Schema::dropIfExists('products');
    }
}
