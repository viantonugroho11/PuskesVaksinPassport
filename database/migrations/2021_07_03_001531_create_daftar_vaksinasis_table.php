<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarVaksinasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_vaksinasis', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('id_vaksinasi');
            $table->string('nik');
            $table->string('nama');
            $table->string('alamat');
            $table->string('tanggal_lahir');
            $table->string('email');
            $table->string('no_telp');
            $table->string('foto_ktp');
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
        Schema::dropIfExists('daftar_vaksinasis');
    }
}
