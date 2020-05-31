<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'data_siswa';
    protected $primaryKey = 'kode_siswa';
    public $incrementing = false;
    protected $keyType = 'string';

}
