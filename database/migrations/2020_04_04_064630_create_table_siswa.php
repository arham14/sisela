<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Data_Siswa', function (Blueprint $table) {
            $table->string('kode_siswa', 15);
            $table->string('nama_siswa');
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin', 1)->nullable();
            $table->string('golongan_darah', 2)->nullable();
            $table->tinyInteger('jumlah_saudara')->nullable();
            $table->tinyInteger('anak_ke')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kode_kelurahan', 15)->nullable();
            $table->string('kode_kecamatan', 15)->nullable();
            $table->string('kode_kota', 15)->nullable();
            $table->string('kode_provinsi', 15)->nullable();
            $table->string('negara')->nullable();
            $table->string('kode_pos', 15)->nullable();
            $table->string('hobi', 150)->nullable();
            $table->string('cita_cita', 150)->nullable();
            $table->string('nisn', 150)->nullable();
            $table->string('nik')->nullable();
            $table->primary('kode_siswa');
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
        Schema::dropIfExists('Data_Siswa');
    }
}
