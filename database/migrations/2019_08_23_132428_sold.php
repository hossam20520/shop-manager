<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sold extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('solds', function (Blueprint $table) {
            $table->bigIncrements('id_sold');
            $table->bigInteger('id_product_sold');
            $table->bigInteger('number_sold');
            $table->float('price_sold', 8, 2);
            $table->float('price_org', 8, 2);
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
        //
        Schema::dropIfExists('sold');
    }
}
