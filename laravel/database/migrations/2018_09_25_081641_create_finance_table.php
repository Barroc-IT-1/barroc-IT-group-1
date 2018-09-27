<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bankrekeningnummer');
            $table->integer('saldo');
            $table->integer('aantal_facturen');
            $table->integer('omzetbedrag');
            $table->integer('limiet');
            $table->integer('grootboekrekening');
            $table->integer('btw_code');
            $table->integer('customer_nummer');
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
        Schema::dropIfExists('finance');
    }
}
