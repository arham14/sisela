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
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin', 1);
            $table->string('golongan_darah', 2);
            $table->tinyInteger('jumlah_saudara');
            $table->tinyInteger('anak_ke');
            $table->string('alamat');
            $table->string('kode_kelurahan', 15);
            $table->string('kode_kecamatan', 15);
            $table->string('kode_kota', 15);
            $table->string('kode_provinsi', 15);
            $table->string('negara');
            $table->string('kode_pos', 15);
            $table->string('hobi', 150);
            $table->string('cita_cita', 150);
            $table->string('nisn', 150);
            $table->string('nik');
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
