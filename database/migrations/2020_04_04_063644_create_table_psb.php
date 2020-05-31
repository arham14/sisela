<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePsb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Data_Siswa_Psb', function (Blueprint $table) {
            $table->id();
            $table->string('kode_siswa', 25);
            $table->string('nik', 35);
            $table->string('kode_tahun', 25);
            $table->boolean('status_terima')->nullable();
            $table->string('kelas_tujuan', 2)->nullable();
            $table->dateTime('waktu_daftar');
            $table->ipAddress('ip_daftar');
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
        Schema::dropIfExists('Data_Siswa_Psb');
    }
}
