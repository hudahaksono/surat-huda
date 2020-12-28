<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surat';
    public $timestamps = false;
    protected $fillable = [
        'id', 'unit_kerja', 'jabatan', 'pegawai', 'file','redaksi'
    ];
}
