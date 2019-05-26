<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('outlet')) {
        Schema::create('outlet', function (Blueprint $table) {
            $table->integer('id');
            $table->string('code', 5);
            $table->string('name', 255);
            $table->string('address');
            $table->string('phone', 15);
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
        Schema::dropIfExists('outlets');
    }
}
