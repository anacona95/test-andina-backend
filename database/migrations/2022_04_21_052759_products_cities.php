<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('products_cities', function(Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')->references( 'id')->on('cities');
            $table->foreignId('product_id')->references( 'id')->on('products');
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
        Schema::dropIfExists(table:'products_cities');
    }
};
