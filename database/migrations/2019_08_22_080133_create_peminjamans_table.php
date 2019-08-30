<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nim_mahasiswa');
            $table->string('keterangan');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_selesai');
            $table->unsignedInteger('ruangan_id');

            $table->foreign('ruangan_id')->references('id')->on('ruangans');
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
        Schema::dropIfExists('peminjamans');
    }
}
