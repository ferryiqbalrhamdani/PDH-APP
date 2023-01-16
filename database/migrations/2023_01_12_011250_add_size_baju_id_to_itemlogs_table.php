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
            $table->string('size_baju_id', 100)->nullable()->after('lebarpundakTolerant');
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
