<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevelopmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('development', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('maintanance_contract');
            $table->integer('open_projects');
            $table->string('applications');
            $table->string('hardware');
            $table->string('operating_system');
            $table->integer('appointments');
            $table->string('internal_contact_person');
            $table->integer('costumer_number');
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
        Schema::dropIfExists('development');
    }
}
