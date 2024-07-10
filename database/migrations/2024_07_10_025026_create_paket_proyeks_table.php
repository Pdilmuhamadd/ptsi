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
        Schema::create('paket_proyeks', function (Blueprint $table) {
            $table->id('id_proyek');
            $table->string('nama_proyek');
            $table->text('deskripsi_proyek')->nullable();
            $table->date('tanggal_mulai');
            $table->date('target_selesai');
            $table->decimal('estimasi_biaya', 15, 2);
            $table->string('pic');
            $table->string('mp');
            $table->integer('sumber_daya');
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
        Schema::dropIfExists('paket_proyeks');
    }
};
