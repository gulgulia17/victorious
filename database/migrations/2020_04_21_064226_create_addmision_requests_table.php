<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddmisionRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addmision_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("stdimage");
            $table->string("sname");
            $table->string("fname");
            $table->string("mname");
            $table->string("date");
            $table->string("gender");
            $table->string("add1");
            $table->string("add2");
            $table->string("add3");
            $table->string("mobno");
            $table->string("email");
            $table->string("nationality");
            $table->string("religion");
            $table->string("category");
            $table->string("occupation");
            $table->string("newclass");
            $table->string("lastclass");
            $table->string("lastschool");
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
        Schema::dropIfExists('addmision_requests');
    }
}
