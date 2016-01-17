<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduks';

    protected $fillable = ['nama','janis_kelamin','alamat','id_kota'];

    public function kota()
    {
    	return $this->belongsTo('App\Models\Kota','id_kota');
    }
}
