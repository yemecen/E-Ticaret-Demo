<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsTableCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name',200);
            $table->text('description');
            $table->integer('brandId');
            $table->string('brandName',50);
            $table->integer('categoryId');
            $table->string('categoryName',50);
            $table->string('sku',100);
            $table->integer('stock');
            $table->integer('tax');
            $table->string('category',50);
            $table->string('image',200);
            $table->decimal('price',8,2);
            $table->string('priceNot',100);
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
    }
}
