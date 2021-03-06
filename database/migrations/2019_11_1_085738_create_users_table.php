<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->integer('role_id')->index()->unsigned()->nullable()->default(2);
            $table->unsignedBigInteger('photo_id')->nullable();
            $table->integer('is_active')->default(0);
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('nickname');
            $table->string('bio');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('slug')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
