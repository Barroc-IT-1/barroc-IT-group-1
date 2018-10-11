<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('offer_numbers');
            $table->integer('offer_status');
            $table->boolean('prospect');
            $table->datetime('date_of_action');
            $table->datetime('last_contact_data');
            $table->datetime('next_action');
            $table->integer('sale_percentage');
            $table->boolean('creditworthy');
            $table->integer('customer_id')->unsigned();
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
        Schema::dropIfExists('sales');
    }
}
