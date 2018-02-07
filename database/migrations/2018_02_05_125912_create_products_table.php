<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->string('identificacion', 20)->primary();

            $table->string('descripcion', 100)->nullable();
            $table->string('unidad', 20)->nullable();
            $table->string('presentacion', 10)->nullable();
            $table->string('imagen')->nullable();
            
            $table->string('familia', 30)->nullable();
            $table->foreign('familia')->references('identificacion')->on('families');

            $table->string('classification', 30)->nullable();
            $table->foreign('classification')->references('identificacion')->on('classifications');

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
