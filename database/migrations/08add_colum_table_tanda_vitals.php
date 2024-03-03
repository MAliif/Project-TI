<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('tanda_vitals', function (Blueprint $table) {
            $table->unsignedBigInteger('pasien_id')->after('suhu')->nullable();
            $table->foreign('pasien_id')->references('noreg')->on('pasiens');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tanda_vitals', function (Blueprint $table) {
            $table->dropForeign(['pasien_id']);
            $table->dropColumn('pasien_id');
        });
    }
};
