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
        Schema::create('itemlogs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', 100)->nullable();
            $table->string('item_id', 100)->nullable();
            $table->string('size_id', 100)->nullable();
            $table->string('tolerant_id', 100)->nullable();
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
        Schema::dropIfExists('itemlogs');
    }
};
