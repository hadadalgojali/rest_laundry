<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('items')) {
        Schema::create('items', function (Blueprint $table) {
            $table->integer('id');
            $table->string('code', 10);
            $table->string('item', 255);
            $table->smallInteger('active', 1);
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
        Schema::dropIfExists('items');
    }
}
