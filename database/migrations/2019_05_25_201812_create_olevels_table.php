<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOlevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('olevels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('center_number');
            $table->integer('reg_no');
            $table->string('exam_year');
           
            $table->string('sub1');
            $table->string('sub2');
            $table->string('sub3');
            $table->string('sub4');
            $table->string('sub5');

            $table->string('grad1');
            $table->string('grad2');
            $table->string('grad3');
            $table->string('grad4');
            $table->string('grad5');

            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('olevels');
    }
}
