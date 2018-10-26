<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersForeign extends Migration
{

    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropForeign(['customer_id']);
        });
    }
}
