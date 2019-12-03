<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('photo_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('wine_location')->nullable();
            $table->string('producer');
            $table->string('wine_name');
            $table->year('vintage');
            $table->string('grape');
            $table->float('alcohol_content');
            $table->decimal('wine_price');
            $table->string('bottle_size');
            $table->integer('is_active');
            $table->timestamps();

            $table->foreign('photo_id')->references('id')->on('photos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wines');
    }
}
