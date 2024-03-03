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
        Schema::create('tanda_vitals', function (Blueprint $table) {
            $table->id();
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->integer('tekanan_darah');
            $table->integer('nadi');
            $table->integer('pernapasan');
            $table->integer('suhu');
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
        Schema::dropIfExists('tanda_vitals');
    }
};
