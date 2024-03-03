<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('pasiens', function (Blueprint $table) {
            $table->unsignedBigInteger('tv_id')->after('no_tlp')->nullable(true);
            $table->foreign('tv_id')->references('id')->on('tanda_vitals');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pasiens', function (Blueprint $table) {
            $table->dropForeign(['tv_id']);
            $table->dropColumn('tv_id');
        });
    }
};
