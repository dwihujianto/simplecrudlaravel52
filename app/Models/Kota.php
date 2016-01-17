<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
	protected $table = 'kotas';

    public function penduduk()
    {
    	return $this->hasMany('App\Models\Penduduk');
    }
}
