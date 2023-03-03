<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table = 'tanggapans';
    protected $fillable = ['tanggapan_id', 'tgl_tanggapan', 'tanggapan', 'nik'];
    protected $primaryKey = 'id';
}
