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
            // baju
            $table->string('lebarpundakTolerant', 100)->nullable()->after('size_id');
            $table->string('panjanglenganTolerant', 100)->nullable()->after('size_id');
            $table->string('lingkarpinggangTolerant', 100)->nullable()->after('size_id');
            $table->string('panjangbajuTolerant', 100)->nullable()->after('size_id');
            $table->string('lingkarbadanTolerant', 100)->nullable()->after('size_id');
            $table->string('catatanBaju', 100)->nullable()->after('size_id');
            // celana
            $table->string('lebarpinggangTolerant', 100)->nullable()->after('size_id');
            $table->string('lebarpinggulTolerant', 100)->nullable()->after('size_id');
            $table->string('lebarpahaTolerant', 100)->nullable()->after('size_id');
            $table->string('lebarbawahTolerant', 100)->nullable()->after('size_id');
            $table->string('panjangcelanaTolerant', 100)->nullable()->after('size_id');
            $table->string('catatanCelana', 100)->nullable()->after('size_id');
            // topi
            $table->string('catatanTopi', 100)->nullable()->after('size_id');
            // sepatu
            $table->string('catatanSepatu', 100)->nullable()->after('size_id');
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
