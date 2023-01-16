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
        Schema::create('tolerant', function (Blueprint $table) {
            $table->id();
            $table->integer('lebar_pundak');
            $table->integer('panjang_lengan');
            $table->integer('lingkar_pinggang');
            $table->integer('panjang_baju');
            $table->integer('lingkar_badan');
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
        Schema::dropIfExists('tolerant');
    }
};
