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
      if (!Schema::hasTable('product')) {
        Schema::create('product', function (Blueprint $table) {
            $table->integer('id');
            $table->foreign('id_class')->references('id')->on('class');
            $table->string('code', 5);
            $table->string('name', 100);
            $table->datetime('created_at');
            $table->datetime('updated_at');
        });
      }
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
