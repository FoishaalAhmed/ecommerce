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

            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug', 350)->unique();
            $table->float('current_price');
            $table->float('previous_price')->nullable();
            $table->float('saving')->nullable();
            $table->integer('quantity');
            $table->mediumText('description')->nullable();
            $table->string('cover');
            $table->mediumText('tags');
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
