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
        Schema::create('sizes', function (Blueprint $table) {
            $table->id();
            $table->string('ukuran_cm')->nullable();
            $table->string('slug', 100)->nullable();
            $table->string('lebar_pundak')->nullable();
            $table->string('panjang_lengan')->nullable();
            $table->string('lingkar_pinggang')->nullable();
            $table->string('panjang_baju')->nullable();
            $table->string('lingkar_badan')->nullable();
            $table->string('lebar_pinggul')->nullable();
            $table->string('lebar_paha')->nullable();
            $table->string('lebar_bawah')->nullable();
            $table->string('panjang_celana')->nullable();
            $table->string('lingkar_kepala')->nullable();
            $table->string('ukuran_kaki')->nullable();
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
        Schema::dropIfExists('sizes');
    }
};
