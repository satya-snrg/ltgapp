<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_business', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('business_name');
            $table->string('category_id');
            $table->string('city')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('udf1')->nullable();
            $table->string('udf2')->nullable();
            $table->json('data')->nullable();
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
        Schema::dropIfExists('local_business');
    }
}
