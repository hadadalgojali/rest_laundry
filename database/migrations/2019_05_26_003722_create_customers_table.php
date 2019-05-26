<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('customer')) {
        Schema::create('customer', function (Blueprint $table) {
              $table->integer('id');
              $table->string('first_name', 50);
              $table->string('last_name', 200);
              $table->text('address');
              $table->string('phone', 15);
              $table->string('email', 100);
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
        Schema::dropIfExists('customers');
    }
}
