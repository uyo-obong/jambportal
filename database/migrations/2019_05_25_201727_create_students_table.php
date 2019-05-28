<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('middle_name');
            $table->string('last_name');
            $table->integer('phone');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');

            $table->integer('user_id')->unsigned();
            $table->integer('zone_id')->unsigned();

            $table->timestamp('email_verified_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
