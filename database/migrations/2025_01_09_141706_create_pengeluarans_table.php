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
        Schema::create('pengeluarans', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_pengeluaran');
            $table->text('deskripsi')->nullable();
            $table->unsignedBigInteger('anggaran_id');
            $table->unsignedBigInteger('kategori_id');
            $table->timestamps();

            $table->foreign('anggaran_id')->references('id')->on('anggarans')->onDelete('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengeluarans');
    }
};
