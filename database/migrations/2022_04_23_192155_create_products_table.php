<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('description');
            $table->integer('category_id');
            $table->string('thumb');
            $table->integer('import_price');
            $table->integer('price');
            $table->integer('sale_price');
            $table->integer('quantity');
            $table->integer('special_offer');
            $table->integer('special_product');
            $table->integer('active');
            // detail
            $table->string('sku');
            $table->longText('specification');
            $table->string('image')->nullable();
            $table->string('info_delivery');
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
        Schema::dropIfExists('products');
    }
}
