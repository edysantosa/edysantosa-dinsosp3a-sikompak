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
        Schema::create('anak_balita_terlantar', function (Blueprint $table) {
            $table->id();
            $table->string('nama_keluarga')->nullable();
            $table->string('hubungan_keluarga')->nullable();
            $table->unsignedBigInteger('lembaga_kesejahteraan_sosial_id');
            $table->foreign('lembaga_kesejahteraan_sosial_id')->references('id')->on('lembaga_kesejahteraan_sosial')->onDelete('cascade');
        });

        Schema::table('pmks', function (Blueprint $table) {
            $table->unsignedBigInteger('anak_balita_terlantar_id')->nullable();
            $table->foreign('anak_balita_terlantar_id')->references('id')->on('anak_balita_terlantar')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pmks', function (Blueprint $table) {
            $table->dropConstrainedForeignId('anak_balita_terlantar_id');
        });

        Schema::dropIfExists('anak_balita_terlantar');
    }
};
