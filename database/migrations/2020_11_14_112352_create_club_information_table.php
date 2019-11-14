<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('club_id')->nullable();
            $table->UnsignedBigInteger('photo_id')->nullable();;
            $table->string('location')->nullable();
            $table->string('bio')->nullable();;
            $table->string('type')->nullable();;
            $table->timestamps();
            $table->foreign('photo_id')->references('id')->on('photos');
            $table->foreign('club_id')->references('id')->on('clubs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('club_information');
    }
}
