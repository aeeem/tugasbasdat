<?php

namespace Kepolisian;

use Illuminate\Database\Eloquent\Model;

class Kantorpolisi extends Model
{
	    public $timestamps=false;
   
	protected $fillable = [
        'kota',
    	'provinsi',
    	'alamat',
    	'sektor',
    	'nama',];
 protected $table = 'kantorpolisi';
    public function polisi(){
return $this->hasmany('Kepolisian/User');
    }
}
