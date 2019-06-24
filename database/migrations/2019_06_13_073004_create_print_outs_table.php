<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrintOutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('print_outs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('center_id');
            $table->integer('studentid');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('photo');
            $table->string('age');
            $table->string('gender');
            $table->string('email');
            $table->string('amount');
            $table->string('regno');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country')->nullable();
            $table->string('institution');
            $table->string('faculty');
            $table->string('department');
            $table->string('sit_no')->unique();
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
        Schema::dropIfExists('print_outs');
    }
}
