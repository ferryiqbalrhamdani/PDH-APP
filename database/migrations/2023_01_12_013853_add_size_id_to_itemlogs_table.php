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
        Schema::table('itemlogs', function (Blueprint $table) {
            $table->string('size_id_sepatu', 100)->nullable()->after('size_id');
            $table->string('size_id_topi', 100)->nullable()->after('size_id');
            $table->string('size_id_celana', 100)->nullable()->after('size_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('itemlogs', function (Blueprint $table) {
            //
        });
    }
};
