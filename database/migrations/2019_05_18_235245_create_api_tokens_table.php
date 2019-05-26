<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('api_tokens')) {
        Schema::create('api_tokens', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('secret_key');
            $table->string('api_token');
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
        Schema::dropIfExists('api_tokens');
    }
}
